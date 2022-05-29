@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL NILAI PENDAFTAR</h1>
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
        <th width="100px">NILAI C1</th>
        <th width="30px">:</th>
        <th>{{ $data->rank}}</th>
    </tr>
    <tr>
        <th width="100px">NILAI C2</th>
        <th width="30px">:</th>
        <th>{{ $data->nomorhp}}</th>
    </tr>
    <tr>
        <th width="100px">NILAI C3</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th width="100px">NILAI C4</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th width="100px">NILAI C5</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th width="100px">NILAI HASIL PEMBOBOTAN</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th width="100px">PERINGKAT</th>
        <th width="30px">:</th>
        <th>{{ $data->jumlah_keluarga}}</th>
    </tr>
    <tr>
        <th><a href="/pendaftar" class="btn btn-success tbn-sm">kembali</a></th>
    </tr>
</table>


@endsection