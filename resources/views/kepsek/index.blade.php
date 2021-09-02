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
          </div>
      
      <TABLE class="table table-hover">
        <tr>
            <th>Id</th>
            <TH>File Rpp</TH>
            <TH>Id Guru</TH>
            <TH>Nama Guru</TH>
            <TH>Nama Supervisor</TH>
            <TH>Tanggal Upload</TH>
            <TH>Status</TH>
        </tr>
         @foreach($data_kepsek as $kepsek)
        <tr>
            <td>{{ $kepsek->id}}</td>
            <td>{{ $kepsek->materi}}</td>
            <td>{{ $kepsek->id_guru}}</td>
            <td>{{ $kepsek->nama_guru}}</td>
            <td>{{ $kepsek->nama_supervisor}}</td>
            <td>{{ $kepsek->tanggal_upload}}</td>
            <td>{{ $kepsek->status}}</td>
            <td>      
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
           <form action="/kepsek/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">Mapel</label>
              <input name="judul_kepsek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="judul_kepsek"  placeholder="Mapel">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Materi Mapel</label>
              <input name="kepsek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="kepsek"  placeholder="Materi Mapel">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">File kepsek</label>
              <input name="materi" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="materi" placeholder="File kepsek" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Id Guru</label>
              <input name="id_guru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_guru" placeholder="Id guru" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Guru</label>
              <input name="nama_guru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_guru" placeholder="Nama Guru" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Supervisor</label>
              <input name="nama_supervisor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_supervisor" placeholder="Nama Supervisor" >
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
