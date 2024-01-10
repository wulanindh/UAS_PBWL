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
            <h2> Report </h2>
    <div class="row">
      <div class="col">
         
      </div>
    </div>
      
            <div class="table-responsive">
<table class="table table-hover"id="myTable">
  <thead>
    <tr>
    <th>NO</th>
        
        <th>KODE PESANAN</th>
        <th>WAKTU ORDER</th>
        <th>WAKTU BAYAR</th>
        <th>PELANGGAN</th>
        <th>MEJA</th>
        <th>TOTAL</th>
        <th>PELAYAN</th>
        <th>AKSI</th>
    </tr>
  </thead><tbody>
    @foreach ($rows as $row)

    <tr>
    <td>{{ $row->list_order_id }}</td>
    <td>{{$row->kode_order}}</td>
    <td><ul class="list-group list-group-flush">
              @foreach($menu as $item)
              <li class="list-group-item" value="{{$row->created_at}}">{{$row->created_at}}</li>
                    @endforeach
              </ul>
    </td>
    <td><ul class="list-group list-group-flush">
              @foreach($bayar as $item)
              <li class="list-group-item" value="{{$row->created_at}}">{{$row->created_at}}</li>
                    @endforeach
              </ul>
    </td>
    <td><ul class="list-group list-group-flush">
             @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->pelanggan }}">{{ $item->pelanggan }}</li>
                    @endforeach
              </ul>
    </td>
    <td><ul class="list-group list-group-flush">
         @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->meja }}">{{ $item->meja }}</li>
                    @endforeach
              </ul>
    </td>
     <td>{{$row->total}}</td>  
    <td><ul class="list-group list-group-flush">
    @foreach($order as $item)
          <li class="list-group-item" value="{{ $item->pelayan }}">{{ $item->pelayan }}</li>
                    @endforeach
              </ul>
    </td>
      
        <td>
          <button class ="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0">
</svg></button>
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
