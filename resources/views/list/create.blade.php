@extends('layouts.app')

@section('content')
    <h2>Add Order</h2>

    <form action="{{ url('list') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NO </label>
            <input type="text" name="list_order_id" id="" class="form-control">
        </div>
        <div class="input-group mb-3">
        </div>
      <div class="mb-3">
            <label for="">KODE ORDER</label>
            @foreach($order as $item)
            <input type="text" name="kode_order" id="floatingInputDisabled" class="form-control"  value="{{ $item->kode_order }}">
            @endforeach
        </div>
        <div class="mb-3">
            <label for="">MENU</label>
            <select class="form-select" aria-label="Default select example" name="menu" id="" class="form-control">
                <option selected>Open this select menu</option>
                @foreach($menu as $item)
                <option value="{{ $item->nama_menu }}">{{ $item->nama_menu }}</option>
                @endforeach
            </select></div><div class="mb-3">
            <label for="">QUANTITY</label>
            <input type="text" name="jumlah" id="" class="form-control">
        </div><div class="mb-3">
            <label for="">CATATAN</label>
            <input type="text" name="catatan" id="" class="form-control">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/pbwl-quiz/public/pelanggan';return false;">
        </div>
    </form>
@endsection
