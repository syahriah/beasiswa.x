@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL PENDAFTAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrub-item"><a href="#">Logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<table class="table">
    <tr>
        <th width="100px">NAMA</th>
        <th width="30px">:</th>
        <th>{{ $data->nama}}</th>
    </tr>
    <tr>
        <th width="100px">NAMA KAMPUS</th>
        <th width="30px">:</th>
        <th>{{ $data->rooms}}</th>
    </tr>
    <tr>
        <th width="100px">NOMOR HP</th>
        <th width="30px">:</th>
        <th>{{ $data->nomorhp}}</th>
    </tr>
    <tr>
        <th width="100px">JUMLAH KELUARGA</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th width="100px">IMAGE</th>
        <th width="30px">:</th>
        <th><img src="{{ url('storage/foto/'.$data->foto) }}" width="300px"></th>
    </tr>
    <tr>
        <th><a href="/resident" class="btn btn-success tbn-sm">kembali</a></th>
    </tr>
</table>


@endsection