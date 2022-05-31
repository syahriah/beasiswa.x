@extends('layout.template')
@section("css")
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset("template") }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
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
    <table class="table table-dark table-striped" id="example2">
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
      {{-- @foreach ($data as $dt)
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
    @endforeach --}}
  </table>

@endsection
@section("script")
<script src="{{ asset("template") }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset("template") }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset("template") }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("template") }}/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
@endsection