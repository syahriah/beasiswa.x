@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA PENDAFTAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Logout</a></li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <a href="/dataresident" class="btn btn-primary btn-sm">ADD</a> <br> <br>
    @if (session('pesan'))
    <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Success!</h5>
        {{ session('pesan')}}.
    </div>
    @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nama Kampus</th>
                    <th>Akred Kampus</th>
                    <th>Prodi</th>
                    <th>Akred Prodi</th>
                    <th>Nilai IPK</th>
                    <th>Biaya UKT</th>
                    <th>Gaji Orang Tua</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $dt)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$dt->nama}}</td>
                  <td>{{$dt->nama_kampus}}</td>
                  <td>{{$dt->ak_kampus}}</td>
                  <td>{{$dt->prodi}}</td>
                  <td>{{$dt->ak_prodi}}</td>
                  <td>{{$dt->ipk}}</td>
                  <td>{{$dt->ukt}}</td>
                  <td>{{$dt->gaji}}</td>
                  <td>
                    <a href="/detail/{{$dt->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="/editresident/{{$dt->id}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    <a href="/hapusresident/{{$dt->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>



@endsection