<!DOCTYPE html>
<html>
<head>
  @include('templates.head')
  <title>Barang Masuk</title>
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
        Data Barang Masuk
      </h1>

    </section>

    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <div class="box" style="padding: 0 30px">
                    <div class="box-header">
                      <h5 class="box-title">Input barang masuk</h5>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="box-body">
                          @include('gudang/validation')
                          <form action="{{ route('purchase.store') }}" method="post">
                            <div class="row">
                              <div class="col-xs-6">
                                <label>Tanggal</label>
                                <input required="" class="form-control form-control-sm" type="date" name="tgl_purchase">
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
                                <input class="form-control" type="text" name="qty_purchase">
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
                          Barang masuk dari supplier.
                        </p>
                        <p>Pastikan barang yang masuk sudah terdata di <a href="{{ url('product') }}">data barang</a></p>
                      </div>
                    </div>
                  
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="padding: 0 30px">
              <div class="box-header">
                <h3 class="box-title">Data Barang yang masuk</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @include('gudang/notification')
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <?php $no=1; ?>
                    <tr style="background-color: rgb(230, 230, 230);">
                      <th>No</th>
                      <th>Tanggal Masuk</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Supplier</th>
                      <th>Jumlah</th>
                      <th>Action</th>                 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($purchases as $purchase)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $purchase->tgl_purchase }}</td>
                      <td>{{ $purchase->products->kode_produk }}</td>
                      <td>{{ $purchase->products->nama_produk }}</td>
                      <td>{{ $purchase->products->id_supplier }}</td>
                      <td>{{ $purchase->qty_purchase }}</td>

                      <td>
                        <form action="{{ url('purchase')}}/{{$purchase->id_purchase}}" method="post">
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
                  <a href="{{ route('purchase.update') }}" class="btn btn-success"><i class="glyphicon glyphicon-circle-arrow-right"></i> Selesai</a>
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
