<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

    protected $data = array();    

    public function index()
    {
        return redirect('dashboard/v1');
    }
    
    public function v1()
    {
        $title = "Dashboard";
        $sub_title = "Version 1";
        $kap=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $pkpt=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_pkpt.id) as jml_pkpt")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","rlp_pkpt.rlp_kap_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $st=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_surat_tugas.id) as jml_st")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","rlp_surat_tugas.rlp_pkpt_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $lap=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_laporan_data_umum.id) as jml_lhp")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $r5=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->where("rlp_kap.kode_rendal","D505")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $r4=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->where("rlp_kap.kode_rendal","D504")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $r3=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->where("rlp_kap.kode_rendal","D503")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $r2=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->where("rlp_kap.kode_rendal","D502")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        $r1=DB::table("rlp_kap")
        ->selectRaw("COUNT(rlp_kap.id) as jml_kap")
        ->join("rlp_jakwas","rlp_kap.rlp_jakwas_id","=","rlp_jakwas.id")
        ->where("rlp_kap.kode_rendal","D501")
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->get();
        /*$tema=DB::table("rlp_jakwas")
        ->selectRaw("rlp_jakwas.id, rlp_jakwas.nama_jakwas, COUNT(rlp_kap.id) as kap, COUNT(rlp_pkpt.id) as pkpt, COUNT(rlp_surat_tugas.id) as st, COUNT(rlp_laporan_data_umum.id) as lhp")
        ->join("rlp_kap","rlp_kap.rlp_jakwas_id","rlp_jakwas.id")
        ->leftJoin("rlp_pkpt","rlp_kap.id","rlp_pkpt.rlp_kap_id")
        ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","rlp_surat_tugas.rlp_pkpt_id")
        ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","rlp_laporan_data_umum.rlp_surat_tugas_id")
        ->whereIn("rlp_kap.kode_rendal",["D501","D502","D503","D504","D505"])
        ->where("rlp_jakwas.tahun_jakwas","2021")
        ->where("rlp_jakwas.id","<>","312")
        ->where("rlp_kap.status","final")
        ->groupBy("rlp_jakwas.id", "rlp_jakwas.nama_jakwas")
        ->get();
        */
        $tema=DB::select("SELECT M.id, M.nama_jakwas, M.id_kap as kap, COUNT(P.id) as pkpt, COUNT(S.id) as st, COUNT(T.id) as lhp
        FROM (SELECT B.id, B.nama_jakwas, COUNT(A.id) as id_kap FROM rlp_kap A RIGHT JOIN rlp_jakwas B ON A.rlp_jakwas_id=B.id
        WHERE B.tahun_jakwas='2021' AND A.status='final' AND B.id<>'312' AND A.kode_rendal IN ('D501', 'D502', 'D503', 'D504', 'D505')
        GROUP BY B.id, B.nama_jakwas) M JOIN rlp_kap N ON M.id=N.rlp_jakwas_id
        LEFT JOIN rlp_pkpt P ON N.id=P.rlp_kap_id
        LEFT JOIN rlp_surat_tugas S ON P.id=S.rlp_pkpt_id
        LEFT JOIN rlp_laporan_data_umum T ON S.id=T.rlp_surat_tugas_id
        GROUP BY M.id, M.nama_jakwas, M.id_kap
        ORDER BY M.nama_jakwas");

        return view('dashboard.v1', compact('tema','kap','pkpt','st','lap','r5','r4','r3','r2','r1','title', 'sub_title'));
    }
    
    public function v2()
    {
        $this->data = array(
            'title' => 'Dashboard',
            'sub_title' => 'Version 2'
        );
        return view('dashboard.v2', $this->data);
    }
    
    public function v3()
    {
        $this->data = array(
            'title' => 'Dashboard',
            'sub_title' => 'Version 3'
        );
        return view('dashboard.v3', $this->data);
    }
    
}
