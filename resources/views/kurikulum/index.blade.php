@extends('layouts.layout_kurikulum')

@section('title')
    Dashboard 
@endsection

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
       
      <div class="container">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
            @endif
        <div class="row">
          <div class="col-6">
            <h1>Data Jadwal</h1>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
            </button>
          </div>
      <TABLE class="table table-hover">
        <tr>
            <th>Id</th>
            <TH>Tanggal</TH>
            <TH>Nama Guru</TH>
            <TH>Nama Supervisor</TH>
            <TH>Status</TH>
            <TH>Aktivitas</TH>
            <th>AKSI</th>
        </tr>
         @foreach($data_kurikulum as $kurikulum)
        <tr>
            <td>{{ $kurikulum->id}}</td>
            <td>{{ $kurikulum->tanggal}}</td>
            <td>{{ $kurikulum->nama_guru}}</td>
            <td>{{ $kurikulum->nama_supervisor}}</td>
            <td>{{ $kurikulum->status}}</td>
            <td>{{ $kurikulum->aktivitas}}</td>
            <td>
            <a href="/kurikulum/{{$kurikulum->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
            </a>
            </td>
        </tr>
        @endforeach
      </table>

        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="/kurikulum/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">tanggal</label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal"  placeholder="tanggal">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Guru</label>
              <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_guru" placeholder="Nama Guru" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Supervisor</label>
              <input name="nama_supervisor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_supervisor" placeholder="Nama Supervisor" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Aktivitas</label>
              <input name="aktivitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="aktivitas" placeholder="Aktivitas" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection
