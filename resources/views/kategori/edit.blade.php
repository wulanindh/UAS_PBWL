@extends('layouts.app')

@section('content')
    <h2>Edit Menu</h2>

    <form action="{{ url('kategori/' . $row->kat_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">JENIS</label>
            <select class="form-select" aria-label="Default select example" name="jenis" id="" class="form-control" value="{{ $row->jenis }}">
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>
         </div>
        <div class="mb-3">
            <label for="">KATEGORI</label>
            <input type="text" name="kategori" id="" class="form-control" value="{{ $row->kategori }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
