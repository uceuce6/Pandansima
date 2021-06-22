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
                                                <option value="">Pilih Unit Perencana dan Pengendali (Direktorat)</option>
                                                <option value="D505">BLU, BLUD, BU Jasa Air, BUMD dan BUM Desa</option>
                                                <option value="D504">BU Energi dan Pertambangan</option>
                                                <option value="D503">BU Jasa Keuangan, Jasa Penilai, dan Manufaktur</option>
                                                <option value="D502">BU Konektivitas, Pariwisata, Kawasan Industri, dan Perumahan</option>
                                                <option value="D501">BU Agrobisnis, Infrastruktur, dan Perdagangan</option>
                                            </select>
                                            <button type="submit" class="form-control col-md-3 btn-warning">Cari</button>
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
            <div class="card card-info">
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
                                <th>ST</th>
                                <th>LHP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $jml_pkpt=0;
                                $jml_st=0;
                                $jml_lhp=0;    
                            @endphp
                            @foreach ($daftar as $number => $b)
                            <tr>
                                <td>{{ (++$number) }}</td>
                                <td><a href='{{ url("tema/{$b->id}") }}''>{{ $b->tema_pengawasan }}</a></td>
                                <td style="text-align:right"><a href='{{ url("kap/{$b->id}") }}''>{{ $b->pkpt }}</a></td>
                                <td style="text-align:right">{{ $b->st }}</td>
                                <td style="text-align:right">{{ $b->lhp }}</td>
                            </tr>
                            @php
                              $jml_pkpt = $jml_pkpt + $b->pkpt;   
                              $jml_st = $jml_st + $b->st;   
                              $jml_lhp = $jml_lhp + $b->lhp;   
                            @endphp                                    
                            @endforeach                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Total</th>
                                <th style="text-align:right">{{ $jml_pkpt }}</th>
                                <th style="text-align:right">{{ $jml_st }}</th>
                                <th style="text-align:right">{{ $jml_lhp }}</th>
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