@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
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

            <h2> Dapur </h2>
   
      

      
            <div class="table-responsive">
<table class="table table-hover"id="myTable">
  <thead>
    <tr>
    <th>NO</th>
        
        <th>KODE PESANAN</th>
        <th>MENU</th>

        <th>HARGA</th>
        <th>QTY</th>
        <th>STATUS</th>
        <th>CATATAN</th>
        
        <th>AKSI</th>

    </tr>
  </thead><tbody>
    @foreach ($rows as $row)

    <tr>
    <td>{{ $row->list_order_id }}</td>
    <td>{{$row->kode_order}}</td>
        
        <td>{{ $row->menu }}</td>
        
        <td><ul class="list-group list-group-flush">
              @foreach($menu as $item)
              <li class="list-group-item" value="1">{{ $item->harga }}</li>
                    @endforeach
              </ul></td>
              
          <td>{{ $row->jumlah }}</td>  
        <td>{{ $row->waktu_order }}</td>
      
        
        
        <td>{{ $row->catatan }}</td>
      
        <td>
          <button class ="btn btn-info btn-sm">Terima</button>
          <button class ="btn btn-success btn-sm">Siap Saji</button>
        </td>
    </tr>
  
    @endforeach 
    </tbody>
  </table> 
  </div>
</div> </div></div></div></div></div>

</body>
<script>
new DataTable('#myTable');
</script>
</body>
@endsection
