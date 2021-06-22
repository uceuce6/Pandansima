<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Pilihan</h3>
        
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form action="{{ route('sima.search') }}" method="get">
                                        @csrf
                                        <label>Unit Perencana dan Pengendali (Direktorat)</label>
                                        <div class="row">
                                            <select name="cari" id="kap" class="form-control col-md-9" style="width: 100%;">
                                                <option value="D505" @if($cari=='D505') {{ 'selected' }} @endif>BLU, BLUD, BU Jasa Air, BUMD dan BUM Desa</option>
                                                <option value="D504" @if($cari=='D504') {{ 'selected' }} @endif>BU Energi dan Pertambangan</option>
                                                <option value="D503" @if($cari=='D503') {{ 'selected' }} @endif>BU Jasa Keuangan, Jasa Penilai, dan Manufaktur</option>
                                                <option value="D502" @if($cari=='D502') {{ 'selected' }} @endif>BU Konektivitas, Pariwisata, Kawasan Industri, dan Perumahan</option>
                                                <option value="D501" @if($cari=='D501') {{ 'selected' }} @endif>BU Agrobisnis, Infrastruktur, dan Perdagangan</option>
                                            
                                            </select>
                                            <button type="submit" class="form-control col-md-3 btn-primary">Cari</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
        

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>

        <div class="col-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">PENGAWASAN</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
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
                                <th>Laporan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar as $number => $b)
                            <tr>
                                <td>{{ (++$number) }}</td>
                                <td>{{ $b->tema_pengawasan }}</td>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->md_unit_kerja }}</td>
                                <td>{{ $b->no_surat_tugas }} <br>{{ $b->nama_penugasan }}</td>
                                <td>{{ $b->nomor_lhp }}</td>
                                <td><a href="{{ url("lihat/{$b->pkpt_id}") }}">Rinci</a></td>
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
                                <th>Laporan</th>
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