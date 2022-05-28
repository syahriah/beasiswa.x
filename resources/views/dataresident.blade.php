@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BIODATA PENDAFTAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Logout</a></li> --}}
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Data Pendaftar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action='/resident/insert' method='POST' enctype='multipart/form-data'>
                @csrf
               <!--
                    <div class="col-md-12">
                      <label for="ak-prodi" class="form-label">Akreditasi Program Studi</label>
                      <select id="ak-prodi" class="form-select">
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option selected >...</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inputUKT" class="form-label">Biaya UKT</label>
                      <input type="text" class="form-control" id="inputUKT" placeholder="Masukkan biaya UKT Per-Semester">
                    </div>
                    <label for="inputGaji" class="form-label">Gaji Orang Tua Per-Bulan</label>
                      <select id="inputGaji" class="form-select">
                      <option selected>Rp 1.000.000 - Rp 2.000.000</option>
                      <option>Rp 2.000.000 - Rp 3.000.000</option>
                      <option>Rp 3.000.000 - Rp 4.000.000</option>
                      <option>Rp 4.000.000 - Rp 5.000.000</option>
                      <option>Rp 5.000.000 Keatas</option>
                      </select> -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input required name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputKampus">Nama Kampus</label>
                    <input required name="inputKampus" type="text" class="form-control" id="inputKampus" placeholder="Masukkan Nama Kampus">
                  </div>
                  <div class="form-group">
                    <label for="ak-kampus">Akreditasi Kampus</label>
                    <input required name="ak-kampus" type="text" class="form-control" id="ak-kampus" placeholder="Masukkan Nilai Akreditasi Kampus">
                  </div>
                  <div class="form-group">
                    <label for="inputProdi">Program studi</label>
                    <input required name="inputProdi" type="text" class="form-control" id="inputProdi" placeholder="Masukkan Program Studi">
                  </div>
                  <div class="form-group">
                    <label for="ak-prodi">Akreditasi Prodi</label>
                    <input required name="ak-prodi" type="text" class="form-control" id="ak-prodi" placeholder="Masukkan Nilai Akreditasi Prodi">
                  </div>
                  <div class="form-group">
                    <label for="ipk">Nilai IPK</label>
                    <input required name="ipk" type="text" class="form-control" id="ipk" placeholder="Masukkan Nilai IPK">
                  </div>
                  <div class="form-group">
                    <label for="ukt">Besar UKT Per-semester</label>
                    <input required name="ukt" type="text" class="form-control" id="ukt" placeholder="Masukkan Nilai UKT">
                  </div>
                  <div class="form-group">
                    <label for="gaji">Besar Gaji Orang Tua Perbulan</label>
                    <input required name="gaji" type="text" class="form-control" id="gaji" placeholder="Masukkan besar gaji orang tua perbulan">
                  </div>
                  <div class="row">
                  <div class="form-group col-sm-12">
                    <label for="foto">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input required type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">foto</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="col-sm">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>

<br>
<br>
        <div class="col-sm-12">
          <tr><a href="/resident" class="btn btn-success ">Back</a></tr>
        </div>
        

@endsection