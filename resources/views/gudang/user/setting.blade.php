<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Setting User</title>
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
		        Setting User
		      </h1>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Setting user</h5>
					              <hr>
					            </div>
					            <div class="box-body">

					            	@if(session('result') == 'success')
					            	<div class="alert alert-info" role="alert">
					            		Data Berhasil di update
					            	</div>
					            	@elseif(session('result') == 'fail')
					            	<div class="alert alert-danger" role="alert">
					            		Data gagal di update !
					            	</div>
					            	@endif

					            	<form action="{{ route('user.setting') }}" method="post">
										<div>
											<label>Nama</label>
											<input class="form-control" type="text" name="name" value="{{ old('name', $users->name) }}" required="">
										</div><br>
										<div>
											<label>Username</label>
											@if(Auth::user()->akses !== 'admin')
												<h4 style="font-style:italic;color:salmon;"><strong>{{$users->username}}</strong></h4>
												<input class="form-control" type="hidden" name="username" value="{{ old('username', $users->username) }}" required="">
											@else
												<input class="form-control" type="text" name="username" value="{{ old('username', $users->username) }}" required="">
											@endif
										</div><br>
										<div>
											<label>Email</label>
											<input class="form-control" type="email" name="email" value="{{ old('email', $users->email) }}" required="">
										</div><br>
										<div>
											<label>Password</label>
											<input class="form-control" type="password" name="password">
											<div class="form-text text-muted">
												<small>kosongkan password apabila tidak diubah</small>
											</div>
										</div><br>
										<div>
											<label>Ulangi Password</label>
											<input class="form-control" type="password" name="repassword">
										</div><br><br>

										<div>
											<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
											<input type="reset" class="btn btn-danger" value="Reset">
											{{csrf_field()}}
											<!-- <input type="hidden" name="_method" value="PUT"> -->
										</div>
					            	</form>

					            </div>
		            		</div>
		        		</div>
		    		</div>
				</div>
			</section>
		</div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			@include('templates.control_sidebar')
		</aside>
	</div>
@include('templates.scripts')
</body>
</html>
