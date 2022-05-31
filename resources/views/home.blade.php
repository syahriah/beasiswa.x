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
                  {{$jumlah}} orang
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
                <span class="info-box-number">{{$lolos}} orang</span>
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
                <span class="info-box-number">{{$tidak_lolos}} orang</span>
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
          <div class="col-sm-12">
            <br>
            <h3>INFORMASI BEASISWA X</h3>
            <div class="card">
              <div class="card-body">
                {{-- make informasi tentang jumlah pendaftar diterima dan tanggal di tutup --}}
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h5 class="m-0">Jumlah Pendaftar</h5>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title">{{$jumlah}} orang</h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h5 class="m-0">Tanggal Tutup</h5>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title">Jum'at, 30 Desember 2022</h1>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                @if($status == "open")
                <a href="/update-status" class="btn btn-info w-100">Tutup Pendaftaran Beasiswa X</a>
                @else
                <div class="alert bg-success text-center col-12">
                  Beasiswa X telah ditutup
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
    </div>
    
    


@endsection