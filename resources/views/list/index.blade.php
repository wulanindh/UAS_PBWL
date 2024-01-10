@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>

  <body>

  <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">


<div class="container">
<h2>Order Item</h2>
<div class="row g-5">
<div class="card" style="width: 18rem;">
          <div class="card-header">
            Featured
          </div>
          <ul class="list-group list-group-flush">
          @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->kode_order }}">{{ $item->kode_order }}</li>
                @endforeach
          </ul>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            Featured
          </div>
          <ul class="list-group list-group-flush">
          @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->meja }}">{{ $item->meja }}</li>
                @endforeach
          </ul>
        </div>
        <div class="card" style="width: 18rem;">
          <div class="card-header">
            Featured
          </div>
          <ul class="list-group list-group-flush">
          @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->pelanggan }}">{{ $item->pelanggan }}</li>
                @endforeach
          </ul>
        </div>
       
        </div>
        <div class="container" style="margin-top: 40px">
<a href="{{ url('list/create') }}" class="btn btn-md btn-success">Tambah Orderan</a>
<a href="{{ url('/bayar') }}" class="btn btn-md btn-success">Bayar</a>

<table class="table table-bordered"  >
    <tr>
    <th>NO</th>
        
        
        <th>MENU</th>

        <th>HARGA</th>
        <th>QTY</th>
        <th>STATUS</th>
        <th>CATATAN</th>
        <th>TOTAL</th>
        <th>AKSI</th>

    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->list_order_id }}</td>
        <td>{{ $row->menu }}</td>
        <td><ul class="list-group list-group-flush">
              @foreach($menu as $item)
              <li class="list-group-item" value="{{ $item->harga }}">{{ $item->harga }}</li>
                    @endforeach
              </ul></td>
          <td>{{ $row->jumlah }}</td>  
        <td>{{ $row->waktu_order }}</td>
      
        
        
        <td>{{ $row->catatan }}</td>
        <td>{{ $row->status }}</td>
        <td>
          <button class ="btn btn-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0">
</svg></button>
          <a href="{{ url('menu/edit/' . $row->menu_id) }}"><button class ="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button></a>
          <button class ="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
        </td>
    </tr>
  </tbody>
    @endforeach 
  </table> 
  </div>
</div> </div></div></div></div></div>

</body>
@endsection
