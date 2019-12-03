<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Edit Jadwal</title>
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
		        Jadwal Training
		      </h1>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Edit jadwal</h5>
					            </div>
					            <div class="box-body">
					            	{!! Form::model($schedules,['route'=>['schedule.update',$schedules->id_jadwal],'method'=>'PUT']) !!}
										<div>
											{{ Form::label ('id_karyawan', "Nama Karyawan") }}
											{{ Form::select('id_karyawan', \App\Employee::pluck('nama_karyawan', 'id_karyawan'), NULL, ['class'=>'form-control']) }}
										</div><br>
					            		<div>
											<label>Judul</label>
											<input class="form-control" type="text" name="judul" value="{{ $schedules->judul }}">
										</div><br>
										<div>
											{{ Form::label ('id_rute', "Rute") }}
											{{ Form::select('id_rute', \App\Route::pluck('nama_rute', 'id_rute'), NULL, ['class'=>'form-control']) }}
										</div><br>
										<div>
											<label for="tgl_training">Tanggal Training</label>
											<input class="form-control" type="date" name="tgl_training" value="{{ $schedules->tgl_training }}">
										</div><br>
										<div>
											{{ Form::label ('id_kategori', "Kategori") }}
											{{ Form::select('id_kategori', \App\Category::pluck('nama_kategori', 'id_kategori'), NULL, ['class'=>'form-control']) }}
										</div><br>
										<div>
											{{ Form::label ('id_venue', "Venue") }}
											{{ Form::select('id_venue', \App\Venue::pluck('nama_venue', 'id_venue'), NULL, ['class'=>'form-control']) }}
										</div><br>						
										<div>
											<label for="ket">Keterangan</label>
											<textarea class="form-control" name="ket" id="ket" cols="80" rows="3">{{ $schedules->ket }}</textarea>
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