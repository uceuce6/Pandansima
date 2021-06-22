<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
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
                                <div class="form-group">
                                    <div class="row">
                                        <label>INDIKATOR KINERJA</label>
                                        <textarea class="form-control">{{ $daftar->ikk_name }}</textarea>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>PERMASALAHAN</label>
                                        <textarea class="form-control">{{ $daftar->permasalah }}</textarea>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>LATAR BELAKANG</label>
                                        <textarea class="form-control">{{ $daftar->latar_belakang }}</textarea>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>TRO</label>
                                        <textarea class="form-control">{{ $daftar->tro }}</textarea>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>BATAS WAKTU SELESAI</label>
                                        <input class="form-control" value="{{ $daftar->rmp_name }}"/>
                                    </div>    
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
        

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>


    </div>
    <!-- /.row -->
</section>
<!-- /.content -->