<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SimaExport;
use Maatwebsite\Excel\Facades\Excel;


class SimaController extends Controller
{
    protected $data = array();

    public function index()
    {
        $cari = "D505";  // default Direktorat 5
        $judul='';
        $title = "SIMA";
        $sub_title = "Rekap Pengawasan";
        $kap=DB::table("rlp_kap")
        ->select("id", "tema_pengawasan")
        ->whereIn("rlp_jakwas_id",["150","151","156"])
        ->where("status","=","final")
        ->where("kode_rendal","=",$cari)
        ->get();
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_kap.id, rlp_kap.tema_pengawasan, COUNT(rlp_pkpt.id) as pkpt, COUNT(rlp_surat_tugas.id) as st, COUNT(rlp_laporan_data_umum.id) as lhp")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->groupBy("rlp_kap.id", "rlp_kap.tema_pengawasan")
        ->get();

        return view('tables.daftar0', compact('kap','daftar','judul', 'title', 'sub_title', 'cari'));
    }

    public function search(Request $request)
    {
        $cari = $request->cari;
        $judul='';
        $title = "Tables";
        $sub_title = "Daftar Rendal Terpilih";
        $kap=DB::table("rlp_kap")
        ->select("id", "tema_pengawasan")
        ->whereIn("rlp_jakwas_id",["150","151","156"])
        ->where("kode_rendal","=","D505")
        ->where("status","=","final")
        ->get();
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_kap.id, rlp_kap.tema_pengawasan, rlp_pkpt.id as pkpt_id, rlp_pkpt.md_unit_kerja, rlp_pkpt.name, rlp_surat_tugas.nama_penugasan, rlp_surat_tugas.no_surat_tugas, rlp_laporan_data_umum.nomor_lhp")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->where("rlp_kap.kode_rendal","=",$cari)
        ->get();
        return view('tables.daftar', compact('kap','daftar','judul', 'title', 'sub_title','cari'));
    }

    public function tema($id)
    {
        //$cari = $request;
        $title = "Tema Pengawasan";
        $sub_title = "Definisi";
        $judul='';
        $daftar=DB::table("rlp_kap")
        ->select("*")
        ->where("rlp_kap.id","=",$id)
        ->first();
        return view('tables.tema', compact('daftar','judul','title', 'sub_title'));
    }

    public function kap($id)
    {
        $title = "KAP";
        $sub_title = "Progres KAP Terpilih";
        $pengenal=$id;
        $judul=DB::table("rlp_kap")->selectRaw("rlp_kap.tema_pengawasan")->where("rlp_kap.id",$id)->first();
        //dd($judul);
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_kap.id, rlp_kap.tema_pengawasan, rlp_pkpt.id as pkpt_id, rlp_pkpt.md_unit_kerja, rlp_pkpt.name, rlp_surat_tugas.id as id_surat_tugas ,rlp_surat_tugas.nama_penugasan, rlp_surat_tugas.no_surat_tugas, rlp_laporan_data_umum.nomor_lhp, rlp_laporan_data_umum.judul_lhp, rlp_uploads.file_name")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->leftJoin("rlp_uploads", "rlp_surat_tugas.id","=","rlp_uploads.rlp_surat_tugas_id")
        ->where("rlp_kap.id","=",$id)
        ->get();
        return view('tables.kap', compact('daftar','pengenal','judul','title', 'sub_title'));
    }

    public function kapexcel(Request $request)
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new SimaExport($request->id), 'kap-excel.xlsx');
    }

    public function lihat($id)
    {
        $title = "PENUGASAN RINCI";
        $sub_title = "Informasi Penugasan Terpilih";
        $judul='';
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_kap.id, rlp_kap.rendal_name, rlp_kap.tema_pengawasan, rlp_pkpt.id as pkpt_id, rlp_pkpt.md_unit_kerja, rlp_pkpt.name, rlp_pkpt.rmp_name, rlp_pkpt.rpl_name, rlp_pkpt.hp, rlp_pkpt.dana, rlp_surat_tugas.nama_penugasan, rlp_surat_tugas.no_surat_tugas, rlp_surat_tugas.tanggal_surat_tugas, rlp_surat_tugas.start_date, rlp_surat_tugas.end_date, rlp_surat_tugas.jumlah_hari_kerja, rlp_surat_tugas.jenis_kegiatan_name, rlp_surat_tugas.realisasi_jumlah_hari, rlp_surat_tugas.realisasi_tanggal_selesai, rlp_surat_tugas.realisasi_anggaran, rlp_pkpt.hitung_kinerja, rlp_laporan_data_umum.nomor_lhp, rlp_laporan_data_umum.tanggal_lhp, rlp_laporan_data_umum.judul_lhp, rlp_laporan_data_umum.fokus_pengawasan")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->where("rlp_pkpt.id","=",$id)
        ->first();
        return view('tables.lihat', compact('daftar','judul','title', 'sub_title'));
    }

    public function perwakilan()
    {
        $title = "Unit Pelaksana";
        $sub_title = "Anggaran dan Pengawasan";
        $judul='';
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_pkpt.md_unit_kerja_id, rlp_pkpt.md_unit_kerja, COUNT(rlp_pkpt.id) as pkpt, SUM(rlp_pkpt.dana) as dana, SUM(rlp_pkpt.hp) as hp, COUNT(rlp_surat_tugas.id) as st, SUM(rlp_surat_tugas.realisasi_anggaran) as r_dana, SUM(rlp_surat_tugas.realisasi_jumlah_hari) as r_hp")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->groupBy("rlp_pkpt.md_unit_kerja_id", "rlp_pkpt.md_unit_kerja")
        ->get();
        //dd($daftar);
        return view('tables.pwk', compact('daftar','judul','title', 'sub_title'));
    }

    public function kf1_pwk($id)
    {
        $title = "Alokasi Pengawasan (KF-1)";
        $sub_title = "Bidang Akuntan Negara";
        $judul='';
        $daftar=DB::table("rlp_kap")
        ->selectRaw("rlp_kap.tema_pengawasan, COUNT(rlp_pkpt.id) as pkpt, SUM(rlp_pkpt.dana) as dana, SUM(rlp_pkpt.hp) as hp, COUNT(rlp_surat_tugas.id) as st, SUM(rlp_surat_tugas.realisasi_anggaran) as r_dana, SUM(rlp_surat_tugas.realisasi_jumlah_hari) as r_hp")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->where("rlp_pkpt.md_unit_kerja_id","=",$id)
        ->groupBy("rlp_kap.tema_pengawasan")
        ->get();
        return view('tables.kf1_pwk', compact('daftar','judul','title', 'sub_title'));
    }

    public function test123()
    {
        $kap=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();

        $data = ['data'=>$kap];

        return $data;

    }

}
