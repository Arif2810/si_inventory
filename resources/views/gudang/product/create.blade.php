<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Tambah Produk</title>
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
		        Data Produk
		      </h1>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Tambah data produk gudang</h5>
					            </div>
					            <div class="box-body">
					            	@include('gudang/validation')
					            	@include('gudang/notification')
					            	<form action="{{ url('/product') }}" method="post" enctype="multipart/form-data">
					            		<div class="form-group">
											<label>Kode Barang</label>
											<input required="" class="form-control" type="text" name="kode_produk">
										</div>
										<div class="form-group">
											<label>Nama Produk</label>
											<input required="" class="form-control" type="text" name="nama_produk">
										</div>
										<div class="form-group">
											<label>Kategori</label>
											<select class="form-control" name="id_kategori">
												<option>- Kategori Produk -</option>
												@foreach($categories as $category)
												<option value="{{$category->id_kategori}}">{{$category->nama_kategori}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label>Foto Barang</label>
								            <input type="file" name="image" value="" class="form-control">
							            </div>
										<div class="form-group">
											<label>Stok</label>
											<input required="" class="form-control" type="number" name="stok_produk">
										</div>
										<div class="form-group">
											<label>Satuan</label>
											<select class="form-control" name="id_unit">
												<option>-- Satuan Produk --</option>
												@foreach($units as $unit)
												<option value="{{ $unit->id_unit }}">{{ $unit->nama_unit }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<label>Lokasi Barang</label>
											<input required="" class="form-control" type="text" name="lokasi">
										</div>
										<div class="form-group">
											<label>Keterangan</label>
											<textarea class="form-control" type="text" name="ket_produk" rows="4" placeholder="Masukkan keterangan ..."></textarea>
											<!-- <input required="" class="form-control" type="text" name="stok_produk"> -->
										</div>
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
