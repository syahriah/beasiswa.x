@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DAFTAR PESERTA LOLOS SELEKSI BEASISWA X</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <label for="comment" class="form-label"></label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <datalist id="comment">
    </datalist>
    <table class="table table-dark table-striped">
    <br>
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
        <th>Foto</th>
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
          <td><img src="{{ url('storage/foto/'.$data->foto) }}" width="300px"></td>
          <td>
          <a href="/detail/{{$dt->id}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
          </td>
        </tr>
    </tbody>
    @endforeach
  </table>

@endsection