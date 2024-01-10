@extends('layouts.app')

@section('content')

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

  </head>

  <body>
  
  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
    <h2> Menu </h2>
    <div class="row">
      <div class="col">
         <a href="{{ url('menu/create') }}" class="btn btn-md btn-success">Add Menu</a>
      </div>
    </div>
    <div class="table-responsive">
<table class="table table-hover"id="myTable">
  <thead>
    <tr>
        <th>NO</th>
        <th>FOTO MENU</th>
        <th>NAMA MENU</th>
        <th>KETERANGAN</th>
        <th>JENIS MENU</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
        <th>STOK</th>
        <th>AKSI</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($rows as $row)
    <tr>
      
        <td>{{ $row->menu_id }}</td>
        <td>
        <img src="public/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
        <td>{{ $row->nama_menu }}</td>
        <td>{{ $row->keterangan }}</td>
        <td>{{ $row->jenis }}</td>
        <td>{{ $row->kategori }}</td>
        <td>{{ $row->harga }}</td>
        <td>{{ $row->stok }}</td>
        <td>
        <button class ="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0">
</svg></a></button>

          <a href="{{ url('menu/edit/' . $row->menu_id) }}" class ="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button></a>
          <button class ="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
        </td>
    </tr>
    
    @endforeach
    </tbody>
</table>

</div>
<!--MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Daftar Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NAMA MENU</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->nama_menu }}</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">KETERANGAN</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->keterangan }}</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">JENIS MENU</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->jenis }}</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">KATEGORI</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->kategori }}</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">HARGA</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->harga }}</span>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">STOK</span>
  <span type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{ $row->stok }}</span>
</div>
    <tr>
      </div>
    </div>
  </div>
</div>
<!--end-->

<script>
new DataTable('#myTable');
</script>
</body>
@endsection
