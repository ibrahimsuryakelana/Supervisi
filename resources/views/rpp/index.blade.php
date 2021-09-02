@extends('layouts.layout')

@section('title')
    Dashboard 
@endsection

@section('content') 
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Buat DataTabel -->
  <link href="cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

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
          <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah data rpp
            </button>


          </div>
      
      <TABLE class="table table-hover" id="dataTable">
        <tr>
            <th>Id</th>
            <TH>Mapel</TH>
            <TH>Materi Mapel</TH>
            <TH>File Rpp</TH>
            <TH>Id Guru</TH>
            <TH>Nama Guru</TH>
            <TH>Nama Supervisor</TH>
            <TH>Tanggal Upload</TH>
            <TH>Status</TH>
            <th>AKSI</th>
        </tr>
         @foreach($data_rpp as $rpp)
        <tr>
            <td>{{ $rpp->id}}</td>
            <td>{{ $rpp->judul_rpp}}</td>
            <td>{{ $rpp->rpp}}</td>
            <td>{{ $rpp->materi}}</td>
            <td>{{ $rpp->id_guru}}</td>
            <td>{{ $rpp->nama_guru}}</td>
            <td>{{ $rpp->nama_supervisor}}</td>
            <td>{{ $rpp->tanggal_upload}}</td>
            <td>{{ $rpp->status}}</td>
            <td>
            <a href="/rpp/{{$rpp->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/rpp/{{$rpp->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('Apakah anda yakin?')">Delete</a>
            
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
           <form action="/rpp/create" method="POST">
            {{csrf_field()}}
            

             <div class="form-group">
              <label for="exampleInputEmail1">Mapel</label>
              <input name="judul_rpp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="judul_rpp"  placeholder="Mapel">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Materi Mapel</label>
              <input name="rpp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="rpp"  placeholder="Materi Mapel">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">File Rpp</label>
              <input name="materi" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="materi" placeholder="File Rpp" >
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
<script src="cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="datatable.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection
