<!DOCTYPE html>
<html>
<head>
	<title>Upload File </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
    <div class="container">
			<!-- <h2 class="text-center my-5">Upload File </h2> -->

			<div class="col-12">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

                    <input type="hidden" name="kode" value="{{$kode}}">
                    <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

                <!-- TO DO List -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">FORM UPLOAD FILE</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group" style="padding-left: 15px;">
                            <div class="row">
                                <label>No ST : <?php echo $daftar->no_surat_tugas ?></label>
                            </div>
                            <div class="row">
                                <label>No lhp : <?php echo $daftar->nomor_lhp ?></label>
                                        <!-- <input class="form-control" type="text" name="no_st" value="{{$daftar->no_surat_tugas}}"> -->
                            </div>
                        </div>
					<div class="form-group">
						<b>File</b><br/>
						<input type="file" name="file">
					</div>

					<!-- <div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div> -->

					<input type="submit" value="Upload" class="btn btn-primary">
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            </div>


				</form>


			</div>
		</div>
	</div>
</body>
</html>
