<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Edit Karyawan</title>
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
		      <h1>
		        Data Pasien
		      </h1>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Edit data karyawan pt. ikpp</h5>
					            </div>
					            <div class="box-body">
					            	@include('gudang/validation')
					            	{!! Form::model($employees,['route'=>['employee.update',$employees->id_karyawan],'method'=>'PUT']) !!}
				            		<div>
										<label>SAP</label>
										<input class="form-control" type="text" name="sap" value="{{ $employees->sap }}">
									</div><br>
									<div>
										<label>Nama</label>
										<input class="form-control" type="text" name="nama_karyawan" value="{{ $employees->nama_karyawan }}">
									</div><br>
									<div>
										<label>Jenis Kelamin</label>
										{{ Form::select('id_gender', \App\Gender::pluck('nama_gender', 'id_gender'), NULL, ['class'=>'form-control']) }}
									</div><br>
									<div>
										<label>Tanggal Masuk Kerja</label>
										<input class="form-control" type="date" name="tgl_lahir" value="{{ $employees->tgl_lahir }}">
									</div><br>
									<div>
										<label>Tanggal Daftar</label>
										<input class="form-control" type="date" name="tgl_daftar" value="{{ $employees->tgl_daftar }}">
									</div><br>
									<div>
										<label>Agama</label>
										{{ Form::select('id_agama', \App\Agama::pluck('nama_agama', 'id_agama'), NULL, ['class'=>'form-control']) }}
									</div><br>
									<div>
										<label>Alamat</label>
										<textarea class="form-control" name="alamat" cols="80" rows="3">{{ $employees->alamat }}</textarea>
										<!-- <input class="form-control" type="text" name="alamat" value="{{ $employees->alamat }}"> -->
									</div><br>
									<div>
										<label>No Telepon</label>
										<input class="form-control" type="text" name="telp" value="{{ $employees->telp }}">
									</div><br><br>
									<div>
										<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
										<input type="reset" class="btn btn-danger" value="Reset">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="PUT">
									</div>
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
