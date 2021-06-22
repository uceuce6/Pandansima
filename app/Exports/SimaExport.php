<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class SimaExport implements FromView, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    function __construct($id) {
    $this->id = $id;
    }

    public function view(): View
    //public function collection()
    {
            $daftar=DB::table("rlp_kap")
            ->selectRaw("rlp_kap.id, rlp_kap.tema_pengawasan, rlp_pkpt.id as pkpt_id, rlp_pkpt.md_unit_kerja, rlp_pkpt.name, rlp_surat_tugas.nama_penugasan, rlp_surat_tugas.no_surat_tugas, rlp_laporan_data_umum.nomor_lhp")
            ->leftJoin("rlp_pkpt","rlp_kap.id","=","rlp_pkpt.rlp_kap_id")
            ->leftJoin("rlp_surat_tugas","rlp_pkpt.id","=","rlp_surat_tugas.rlp_pkpt_id")
            ->leftJoin("rlp_laporan_data_umum","rlp_surat_tugas.id","=","rlp_laporan_data_umum.rlp_surat_tugas_id")
            ->where("rlp_kap.id","=",$this->id)
            ->get();

            return view('tables.kapexcel', [
                'daftar' => $daftar
            ]);

    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:G500'; // All headers
                $kolom = ['B','C','D','E','F'];
                foreach ($kolom as $k) {
                    $event->sheet->getDelegate()->getColumnDimension($k)->setWidth(50);
                }
                //$event->sheet->getDelegate()->getStyle($cellRange)->getw->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
            }
        ];
    }
}
