@extends('layouts.app')

@section('content')
    <h2>Add Kategori</h2>

    <form action="{{ url('kategori') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO </label>
            <input type="text" name="kat_id" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">JENIS KATEGORI </label>
            <select class="form-select" aria-label="Default select example" name="jenis" id="" class="form-control">
                <option selected>Open this select menu</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">KATEGORI </label>
            <input type="text" name="kategori" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/pelanggan';return false;">
        </div>
    </form>
@endsection
