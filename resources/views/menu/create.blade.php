@extends('layouts.app')

@section('content')
    <h2>Add Menu</h2>

    <form action="{{ url('menu') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO </label>
            <input type="text" name="menu_id" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
        <label for="">FOTO</label>
        <input type="file" class="form-control" id="inputGroupFile02">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
      </div>
            <div class="mb-3">
            <label for="">NAMA MENU</label>
            <input type="text" name="nama_menu" id="" class="form-control">
      
        </div><div class="mb-3">
            <label for="">KETERANGAN</label>
            <input type="text" name="keterangan" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">KATEGORI</label>
            <select class="form-select" aria-label="Default select example" name="kategori" id="" class="form-control">
                <option selected>Open this select menu</option>
                @foreach($kategori as $item)
                <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">JENIS</label>
            <select class="form-select" aria-label="Default select example" name="jenis" id="" class="form-control">
                <option selected>Open this select menu</option>
                @foreach($kategori as $item)
                <option value="{{ $item->jenis }}">{{ $item->jenis }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">STOK</label>
            <input type="text" name="stok" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/pelanggan';return false;">
        </div>
    </form>
@endsection
