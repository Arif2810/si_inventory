<!DOCTYPE html>
<html>
<head>
  @include('templates.head')
  <title>Pengambilan Barang</title>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="min-height: 400px;">
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
        Data Pengambilan Barang
      </h1>

    </section>

    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <div class="box" style="padding: 0 30px">
                    <div class="box-header">
                      <h5 class="box-title">Barang yang akan diambil</h5>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="box-body">
                          @include('gudang/validation')
                          <form action="{{ route('sell.store') }}" method="post">
                            <div class="row">
                              <div class="col-xs-6">
                                <label>Tanggal</label>
                                <input required="" class="form-control form-control-sm" type="date" name="tgl_sell">
                              </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                              <div class="col-xs-6">
                                <label>Pengambil</label>
                                <select class="form-control form-control-sm" name="id_karyawan">
                                  <option>- SAPid -</option>
                                  @foreach($employees as $employee)
                                  <option value="{{$employee->id_karyawan}}">{{$employee->sap}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                              <div class="col-xs-6">
                                <label>Nama Barang</label>
                                <select class="form-control form-control-sm" name="id_produk">
                                  <option>- Nama barang -</option>
                                  @foreach($products as $product)
                                  <option value="{{$product->id_produk}}">{{$product->nama_produk}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                              <div class="col-xs-6">
                                <label>Jumlah</label>
                                <input class="form-control" type="text" name="qty">
                              </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-xs-6">
                                <input class="btn btn-primary" type="submit" value="Tambahkan">
                                {{csrf_field()}}
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>

                      <div class="col-xs-6" style="padding: 20px">
                        <p style="color: salmon; font-style: italic;">Keterangan :</p>
                        <p>
                          Pilih barang yang akan diambil.

                        </p>
                      </div>
                    </div>
                  
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="padding: 0 30px">
              <div class="box-header">
                <h3 class="box-title">Data Barang yang diambil</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @include('gudang/notification')
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <?php $no=1; ?>
                    <tr style="background-color: rgb(230, 230, 230);">
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Pengambil</th>
                      <th>Jumlah</th>
                      <th>Action</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sells as $sell)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $sell->tgl_sell }}</td>
                      <td>{{ $sell->kode_produk }}</td>
                      <td>{{ $sell->nama_produk }}</td>
                      <td>{{ $sell->nama_karyawan }}</td>
                      <td>{{ $sell->qty }}</td>

                      <td>
                        <form action="{{ url('sell')}}/{{$sell->id_sell}}" method="post">
                          {{method_field('delete')}}
                          {{csrf_field()}}
                          <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Cancel">
                          {{csrf_field()}}
                          <input type="hidden" name="_method" value="DELETE">
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                    <tr>
                      
                    </tr>
                  </tbody>
                </table>
                <div style="margin-top: 20px">
                  <a href="{{ route('sell.update') }}" class="btn btn-success"><i class="glyphicon glyphicon-circle-arrow-right"></i> Selesai</a>
                </div>
              </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    @include('templates.control_sidebar')
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@include('templates.modal')
</body>
</html>
