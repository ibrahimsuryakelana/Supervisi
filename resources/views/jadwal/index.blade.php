@extends('layouts.layout')

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
            <h1>Data jadwal</h1>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah jadwal
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
         @foreach($data_jadwal as $jadwal)
        <tr>
            <td>{{ $jadwal->id}}</td>
            <td>{{ $jadwal->tanggal}}</td>
            <td>{{ $jadwal->nama_guru}}</td>
            <td>{{ $jadwal->nama_supervisor}}</td>
            <td>{{ $jadwal->status}}</td>
            <td>{{ $jadwal->aktivitas}}</td>
            <td>
            <a href="/jadwal/{{$jadwal->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/jadwal/{{$jadwal->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">Delete</a>
            
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
           <form action="/jadwal/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">tanggal</label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="tanggal"  placeholder="tanggal">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Guru</label>
              <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_guru" placeholder="nama_guru" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Supervisor</label>
              <input name="nama_supervisor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_supervisor" placeholder="nama_supervisor" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Aktivitas</label>
              <input name="aktivitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="aktivitas" placeholder="aktivitas" >
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
