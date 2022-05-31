@extends('layout.template')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BEASISWA X</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/logout">Logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.navbar -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Pendaftar Beasiswa</span>
                <span class="info-box-number">
                  {{$jumlah}}
                  <small>orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="nav-icon fas fa-user-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Lolos Beasiswa</span>
                <span class="info-box-number">{{$lolos}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fas fa-user-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Tidak Lolos Beasiswa</span>
                <span class="info-box-number">{{$tidak_lolos}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <div class="card bg-gradient-success">
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"></div>
        </div>
        <!-- /.card-body -->
      </div>

      <div class="input-group mb-3">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <br>
          <br>
            <h3>JUMLAH SLOT BEASISWA X</h3>
          </div>
          </div>
    </div>
    
    <input id="slot" type="text" class="form-control" placeholder="Masukkan Jumlah Slot Penerima Beasiswa" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="btnslot">Button </button>
      <!-- /.card -->
    </section>
    <section class="content">
      <div class="container-fluid">
    <table class="table table-dark table-striped">
        <thead>
               <tr>
                    <th>Jumlah Slot Beasiswa X</th>
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
            </tbody>
     </table>
    </div>
     </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <br>
          <br>
            <h3>TANGGAL PENUTUPAN FORM PENDAFTARAN</h3>
          </div>
          </div>
    </div>


@endsection