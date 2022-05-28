<!-- /.
@extends('layout.template')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>COMMENT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Logout</a></li> --}}
            </ol>
          </div>
        </div>
      </div>
    </section>
    <label for="comment" class="form-label"></label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <datalist id="comment">
    </datalist>
    <table class="table table-dark table-striped">
    <br>
    <br>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Rooms</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $dt)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dt->rooms}}</td>
                <td>{{$dt->comment}}</td>
                <td>
                <a href="/hapuskomen/{{$dt->id}}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>

@endsection
 -->