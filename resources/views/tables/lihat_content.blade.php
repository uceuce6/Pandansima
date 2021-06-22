<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Penugasan Rinci</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">



                        </div>
                        <!-- /.row -->
<!--                        <h4 class="mt-5 ">Penugasan Rinci</h4>  -->
                        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">KAP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">PKPT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill" href="#custom-content-above-messages" role="tab" aria-controls="custom-content-above-messages" aria-selected="false">Surat Tugas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill" href="#custom-content-above-settings" role="tab" aria-controls="custom-content-above-settings" aria-selected="false">Pelaporan</a>
                            </li>
                        </ul>
                        <div class="tab-custom-content">
                            <p class="lead mb-0">penugasan rinci sebagai berikut</p>
                        </div>
                        <div class="tab-content" id="custom-content-above-tabContent">
                            <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label>RENDAL</label>
                                            <textarea class="form-control">{{ $daftar->rendal_name }}</textarea>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>KAP</label>
                                            <textarea class="form-control">{{ $daftar->tema_pengawasan }}</textarea>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label>PKPT</label>
                                            <textarea class="form-control">{{ $daftar->name }}</textarea>
                                            <input class="form-control" value="{{ $daftar->md_unit_kerja }}"/>
                                            <input class="form-control" value="{{ $daftar->jenis_kegiatan_name }}"/>
                                            <input class="form-control" value="{{ $daftar->hitung_kinerja }}"/>
                                        </div>    
                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel" aria-labelledby="custom-content-above-messages-tab">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label>SURAT TUGAS</label>
                                            <textarea class="form-control">{{ $daftar->nama_penugasan }}</textarea>
                                            <input class="form-control" value="{{ $daftar->no_surat_tugas }}"/>
                                            <input class="form-control" value="{{ $daftar->tanggal_surat_tugas }}"/>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>HP</label>
                                            <input class="form-control" value="{{ $daftar->hp }}"/>
                                            <input class="form-control" value="{{ $daftar->realisasi_jumlah_hari }}"/>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>DANA</label>
                                            <input class="form-control" value="{{ $daftar->dana }}"/>
                                            <input class="form-control" value="{{ $daftar->realisasi_anggaran }}"/>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>RMP</label>
                                            <input class="form-control" value="{{ $daftar->rmp_name }}"/>
                                            <input class="form-control" value="{{ $daftar->start_date }}"/>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label>RPL</label>
                                            <input class="form-control" value="{{ $daftar->rpl_name }}"/>
                                            <input class="form-control" value="{{ $daftar->end_date }}"/>
                                        </div>    
                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel" aria-labelledby="custom-content-above-settings-tab">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <label>PELAPORAN</label>
                                            <textarea class="form-control">{{ $daftar->judul_lhp }}</textarea>
                                            <input class="form-control" value="{{ $daftar->nomor_lhp }}"/>
                                            <input class="form-control" value="{{ $daftar->tanggal_lhp }}"/>
                                            <input class="form-control" value="{{ $daftar->fokus_pengawasan }}"/>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>


    </div>
    <!-- /.row -->

<!--    <div class="tab-custom-content">
        <p class="lead mb-0">Custom Content goes here</p>
    </div>
-->
   
</section>
<!-- /.content -->