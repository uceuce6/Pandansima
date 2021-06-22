<table>
        <tr>
            <th>No</th>
            <th>Tema</th>
            <th>PKPT</th>
            <th>Pelaksana</th>
            <th>Surat Tugas</th>
            <th>Laporan</th>
            <th></th>
        </tr>
        @foreach ($daftar as $number => $b)
        <tr>
            <td>{{ (++$number) }}</td>
            <td>{{ $b->tema_pengawasan }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->md_unit_kerja }}</td>
            <td>{{ $b->no_surat_tugas }} <br>{{ $b->nama_penugasan }}</td>
            <td>{{ $b->nomor_lhp }}</td>
            <td></td>
        </tr>                                    
        @endforeach                            
</table>
