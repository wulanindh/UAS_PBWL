@extends('layouts.app')

@section('content')
    <h2>Edit Menu</h2>

    <form action="{{ url('menu/' . $row->menu_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="nama_menu" id="" class="form-control" value="{{ $row->nama_menu }}">
        </div>
        <div class="input-group mb-3">
        <label for="">FOTO</label>
        <input type="file" class="form-control" id="inputGroupFile02" value="{{ $row->foto }}">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
      </div>
      <div class="mb-3">
            <label for="">NAMA MENU</label>
            <input type="text" name="nama_menu" id="" class="form-control" value="{{ $row->nama_menu }}">
            <div class="mb-3">
            <label for="">KATEGORI</label>
            <select class="form-select" aria-label="Default select example" name="kategori" id="" class="form-control" value="{{ $row->kategori }}">
                <option selected>{{ $row->kategori }}</option>
                @foreach($kategori as $item)
                <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">JENIS</label>
            <select class="form-select" aria-label="Default select example" name="jenis" id="" class="form-control" value="{{ $row->jenis }}">
                <option selected>{{ $row->jenis }}</option>
                @foreach($kategori as $item)
                <option value="{{ $item->jenis }}">{{ $item->jenis }}</option>
                @endforeach
            </select>
        </div>
        </div><div class="mb-3">
            <label for="">KETERANGAN</label>
            <input type="text" name="keterangan" id="" class="form-control" value="{{ $row->keterangan }}">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control" value="{{ $row->harga }}">
        </div>
        <div class="mb-3">
            <label for="">STOK</label>
            <input type="text" name="stok" id="" class="form-control" value="{{ $row->stok }}">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
