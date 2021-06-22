<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title"><a class="btn btn-warning" href="{{ route('kapexcel',$pengenal) }}" _blank><i
                                class="fa fa-plus-circle"></i> Cetak EXCEL</a></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i></button>


                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tema</th>
                            <th>PKPT</th>
                            <th>Pelaksana</th>
                            <th>Surat Tugas</th>
                            <!-- <th>Laporan</th> -->
                            <th>Preview</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($daftar as $number => $b)

                            @php

                                $src = data_table('rlp_uploads','file_name','rlp_surat_tugas_id', '1');

                            @endphp


                            <tr>
                                <td>{{ (++$number) }}</td>
                                <td>{{ $b->tema_pengawasan }}</td>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->md_unit_kerja }}</td>
                                <td>{{ $b->no_surat_tugas }} <br>{{ $b->nama_penugasan }}</td>
                                <td>{{ $b->nomor_lhp }} <br>{{ $b->judul_lhp }}</td>
                                <td><a href='{{ url("lihat/{$b->pkpt_id}") }}'>View</a></td>
                                <td><a href='{{ url("upload/{$b->id_surat_tugas}") }}'>Upload</a></td>
                            <!-- <td><a href='{{ url("/file/download/{$b->id_surat_tugas}") }}'>Download</a></td> -->
                            <!-- <td><a href='{{ url("/file/show_data/{$b->id_surat_tugas}") }}' target="_blank">Preview langung</a></td> -->
                            <!-- <td><a href='{{ url("show_file_upload/{$b->id_surat_tugas}") }}'>Preview    </a></td> -->
                            <!-- <td><a href='{{ url("show_upload/{$b->id_surat_tugas}") }}'>Preview</a></td> -->

                                <td><a href='{{ url("/file/download/{$src}") }}'>Preview</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tema</th>
                            <th>PKPT</th>
                            <th>Pelaksana</th>
                            <th>Surat Tugas</th>
                            <!-- <th>Laporan</th> -->
                            <th>Preview</th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
