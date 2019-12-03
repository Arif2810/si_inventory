<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Tambah Supplier</title>
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
		        Data Supplier
		      </h1>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Tambah data supplier</h5>
					            </div>
					            <div class="box-body">
					            	@include('gudang/validation')
					            	@include('gudang/notification')
					            	<form action="{{ url('/supplier') }}" method="post">
										<div>
											<label>Nama Supplier</label>
											<input required="" class="form-control" type="text" name="nama_supplier">
										</div><br>
										<div>
											<label>Kontak Person</label>
											<input required="" class="form-control" type="text" name="cp">
										</div><br>
										<div>
											<label>Nomor Telepon</label>
											<input required="" class="form-control" type="text" name="telp_supplier">
										</div><br>
										<div>
											<label>Alamat</label>
											<textarea class="form-control" type="text" name="alamat_supplier" cols="80" rows="3"></textarea>
										</div><br><br>
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
