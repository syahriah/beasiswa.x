@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA PENDAFTAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Logout</a></li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="/resident/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="from-group">
                    <label>Nama</label>
                    <input required name="nama" type="text" class="form-control" value = "{{ $data->nama}}">
                    <div class="text-danger">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Nama Kampus</label>
                    <input required name="inputKampus" type="text" class="form-control" value = "{{ $data->rooms}}">
                    <div class="text-danger">
                        @error('rooms')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Akreditasi Kampus</label>
                    <input required name="ak-kampus" type="text" class="form-control" value = "{{ $data->nomorhp}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Program Studi</label>
                    <input required name="inputProdi" type="text" class="form-control" value = "{{ $data->jumlah_keluarga}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Akreditasi Program Studi</label>
                    <input required name="ak-prodi" type="text" class="form-control" value = "{{ $data->jumlah_keluarga}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Nilai IPK</label>
                    <input required name="ipk" type="text" class="form-control" value = "{{ $data->jumlah_keluarga}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Biaya UKT Persemester</label>
                    <input required name="ukt" type="text" class="form-control" value = "{{ $data->jumlah_keluarga}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="from-group">
                    <label>Gaji Orang Tua Perbulan</label>
                    <input required name="gaji" type="text" class="form-control" value = "{{ $data->jumlah_keluarga}}">
                    <div class="text-danger">
                        @error('nomorhp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-sm 12 mt-3">
                    <div class="col-sm-4">
                        <img src="{{ url('storage/foto/'.$data->foto) }}" width="100px">
                    </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Ganti Foto</label>
                                <input name="foto" type="file" name="foto" class="form-control">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="col-sm 12">
                    <div class="form-group">
                        <button name="id" value="{{$data->id}}" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br>
        <br>
</form>

@endsection




                