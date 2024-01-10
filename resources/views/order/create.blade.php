@extends('layouts.app')

@section('content')
    <h2>Add Order</h2>

    <form action="{{ url('order') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO </label>
            <input type="text" name="order_id" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
        </div><div class="mb-3">
            <label for="">KODE ORDER</label>
            <input type="text" name="kode_order" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">PELANGGAN</label>
            <input type="text" name="pelanggan" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">MEJA</label>
            <input type="text" name="meja" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">PELAYAN</label>
            <input type="text" name="pelayan" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">STATUS</label>
            <input type="text" name="status" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">WAKTU ORDER</label>
            <input type="text" name="waktu_order" id="" class="form-control">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/pelanggan';return false;">
        </div>
    </form>
@endsection
