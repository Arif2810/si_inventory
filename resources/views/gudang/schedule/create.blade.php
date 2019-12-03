<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Tambah Jadwal Training</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

  	<header class="main-header">
  		@include('templates.header')
  	</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			@include('templates.sidebar')
		</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>Jadwal Training</h1>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<div class="box-header">
								<h5 class="box-title">Tambah jadwal training karyawan</h5>
							</div>
							<div class="box-body">
								@include('admin/validation')
								@include('admin/notification')
								<form action="{{ url('/schedule') }}" method="post">
									<div>
										<label for="">Nama Karyawan</label>
										<select required="" class="form-control" name="id_karyawan">
											<option>- Pilih Karyawan -</option>
											@foreach($employees as $employees)
											<option value="{{$employees->id_karyawan}}">{{$employees->nama_karyawan}}</option>
											@endforeach
										</select>
									</div><br>

									<div>
										<label for="judul">Judul Training</label>
										<input type="text" class="form-control" name="judul" id="judul">
									</div><br>

									<div>
										<label for="tgl_training">Tanggal Training</label>
										<input required="" class="form-control" type="date" name="tgl_training" id="tgl_training" value="<?=date('Y-m-d')?>">
									</div><br>
									
									<div>
										<label for="">Rute</label>
										<select class="form-control" name="id_rute">
											<option value="">-- rute --</option>
											@foreach($routes as $routes)
											<option value="{{$routes->id_rute}}">{{$routes->nama_rute}}</option>
											@endforeach
										</select>
									</div><br>

									<div>
										<label for="">Venue</label>
										<select class="form-control" name="id_venue">
											<option value="">-- venue --</option>
											@foreach($venues as $venues)
											<option value="{{$venues->id_venue}}">{{$venues->nama_venue}}</option>
											@endforeach
										</select>
									</div><br>
									
									<div>
										<label for="">Kategori</label>
										<select class="form-control" name="id_kategori">
											<option value="">-- tipe training --</option>
											@foreach($categories as $categories)
											<option value="{{$categories->id_kategori}}">{{$categories->nama_kategori}}</option>
											@endforeach
										</select>
									</div><br>
									
									<div>
										<label for="ket">Keterangan</label>
										<textarea class="form-control" type="text" name="ket" id="ket" cols="80" rows="3"></textarea>
									</div><br>
									
									<div>
										<input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
										{{csrf_field()}}
										<input type="reset" class="btn btn-danger" value="Reset">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		@include('templates.control_sidebar')
	</aside>
</div>
@include('templates.scripts')
</body>
</html>
