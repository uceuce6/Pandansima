<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\rlp_uploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UploadController extends Controller
{
    // public function upload(){
    // 	return view('upload');
    // }

    public function upload($id)
    {
        //$rlp_uploads = rlp_uploads::get();
        $title = "FORM UPLOAD";
        $sub_title = "upload Laporan";
        $judul = '';
        // $daftar=DB::table("rlp_surat_tugas")
        // ->selectRaw("rlp_surat_tugas.no_surat_tugas")
        // ->where("rlp_surat_tugas.id","=",$id)
        // ->first();

        $daftar = DB::table("rlp_surat_tugas")
            ->selectRaw("rlp_surat_tugas.no_surat_tugas,rlp_laporan_data_umum.nomor_lhp")
            ->leftJoin("rlp_laporan_data_umum", "rlp_surat_tugas.id", "=", "rlp_laporan_data_umum.rlp_surat_tugas_id")
            ->where("rlp_surat_tugas.id", "=", $id)
            ->first();

        $kode = $id;
        return view('upload', compact('daftar', 'kode', 'title', 'sub_title', 'judul'));


    }

    public function proses_upload(Request $request)
    {

        $data = new rlp_uploads();

        // Alert::question('Yakin Upload ?', 'Question Message');

        $this->validate($request, [
            'file' => 'required',
        ]);

        if ($request != null) {
            Alert::success('Sukses !', 'Data Berhasil di Upload');
        }


        $rlpSuratTugasId = $request->kode;
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->getRealPath();

        //AssignDataIntoModel
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $data->file = $filename;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save;
        //GetFileDetailInfo
        //dd($file);

        //MoveFolderOnLocalStorage
        //  $file->move('data_file',$file->getClientOriginalExtension());
        $file->move('data_file', $file->getClientOriginalName());


        // $request->user()->proses_upload([
        //     'rlp_uploads'=>$file]);

        //Upload to Database
        rlp_uploads::create([
            'rlp_surat_tugas_id' => $rlpSuratTugasId,
            'file_name' => $fileName,
            'file_path' => $filePath,
            'file_data' => $file,
        ]);

// Redirect After Upload
        return Redirect()->back();
//return redirect('/');
    }

    // public function preview ()
    // {


    //     $id_surat_tugas=rlp_uploads::all();
    //     return view('preview', compact('id_surat_tugas'));
    // }

    // public function download ($file)
    // {
    //     $file=rlp_uploads::find($file);
    //     return  response()->download('data_file/'.$file);

    // }

    public function show_data($id)
    {
        //GetAllData
        //$data=rlp_uploads::all();
        //GetSpecificData
        //$dataUpload=rlp_uploads::find($id);
        $title = "PREVIEW";
        $sub_title = "preview Laporan";
        $judul = '';

        $dataUpload = DB::table("rlp_uploads")
            ->selectRaw("rlp_uploads.id,rlp_uploads.rlp_surat_tugas_id,rlp_uploads.file_name")
            ->where("rlp_uploads.rlp_surat_tugas_id", "=", $id)
            ->first();
        // dd($dataUpload);


        return view('show_upload', compact('dataUpload', 'title', 'sub_title', 'judul'));

        // $filename = 'test.pdf';
        // $path = storage_path($filename);

        // return Response::make(file_get_contents($path), 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="'.$filename.'"'
        // ]);
//return view('show_file_upload',['data'=>$dataUpload]);
    }

    public function download($file)
    {

        // return  response()->download(public_path('data_file/'.$file));
        return response()->file(public_path('data_file/' . $file));
    }

}
