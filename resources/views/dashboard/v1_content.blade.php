<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $kap[0]->jml_kap }}</h3>

                        <p>Tema Pengawasan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-gear-a"></i>
                    </div>
                    <a href="#" class="small-box-footer">data rinci <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $pkpt[0]->jml_pkpt }}</h3>

                        <p>PKPT</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">data rinci <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $st[0]->jml_st }}</h3>

                        <p>Surat Tugas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document-text"></i>
                    </div>
                    <a href="#" class="small-box-footer">data rinci <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $lap[0]->jml_lhp }}</h3>

                        <p>Laporan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-printer"></i>
                    </div>
                    <a href="#" class="small-box-footer">data rinci <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-8 connectedSortable">

                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dukungan Akuntan Negara terhadap Kebijakan Pengawasan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Kebijakan Pengawasan</th>
                                        <th>KAP</th>
                                        <th>PKPT</th>
                                        <th>ST</th>
                                        <th>LHP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tema as $number => $t)
                                        <tr>
                                            <td>{{ $t->nama_jakwas }}</td>
                                            <td>{{ $t->kap }}</td>
                                            <td>{{ $t->pkpt }}</td>
                                            <td>{{ $t->st }}</td>
                                            <td>{{ $t->lhp }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-4 connectedSortable">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tema Pengawasan per Unit Perencana/Pengendali</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="chart-responsive">
                                    <canvas id="pieChart" height="150"></canvas>
                                </div>
                                <!-- ./chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <ul class="chart-legend clearfix">
                                    <li><i class="far fa-circle text-danger"></i> Direktorat 5</li>
                                    <li><i class="far fa-circle text-success"></i> Direktorat 4</li>
                                    <li><i class="far fa-circle text-warning"></i> Direktorat 3</li>
                                    <li><i class="far fa-circle text-info"></i> Direktorat 2</li>
                                    <li><i class="far fa-circle text-primary"></i> Direktorat 1</li>
                                </ul>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
