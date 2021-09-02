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
            <h1>Data</h1>
          </div>
      
      <TABLE class="table table-hover">
        <tr>
            <TH>Id</TH>
            <TH>Mapel</TH>
            <TH>Materi Mapel</TH>
            <TH>File Rpp</TH>
            <TH>Nama Guru</TH>
            <TH>Nama Supervisor</TH>
            <TH>Tanggal Upload</TH>
            <TH>Status</TH>
            <th>AKSI</th>
        </tr>
         @foreach($data_supervisor as $supervisor)
        <tr>
        
            <td>{{ $supervisor->id}}</td>
            <td>{{ $supervisor->judul_rpp}}</td>
            <td>{{ $supervisor->rpp}}</td>
            <td>{{ $supervisor->materi}}</td>
            <td>{{ $supervisor->nama_guru}}</td>
            <td>{{ $supervisor->nama_supervisor}}</td>
            <td>{{ $supervisor->tanggal_upload}}</td>
            <td>{{ $supervisor->status}}</td>
            <td>
            <a href="/supervisor/{{$supervisor->id}}/edit" class="btn btn-warning btn-sm">Periksa</a>
            <!-- <a href="/supervisor/{{$supervisor->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">Delete</a> -->
            
            </td>
        </tr>
        @endforeach
      </table>

        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection
