@extends('layouts.app')

@section('content')
    <h2>Edit Menu</h2>

    <form action="{{ url('user/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAME</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $row->name }}">
        </div><div class="mb-3">
            <label for="">EMAIL</label>
            <input type="text" name="email" id="" class="form-control" value="{{ $row->email }}">
        </div>
        <div class="mb-3">
            <label for="">PASSWORD</label>
            <input type="text" name="password" id="" class="form-control" value="{{ $row->password }}">
        </div>
        <div class="mb-3">
            <label for="">ROLE</label>
            <input type="text" name="role" id="" class="form-control" value="{{ $row->role }}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="hp" id="" class="form-control" value="{{ $row->hp }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <input type="cancel"value="Cancel" class="btn btn-primary" onclick="window.location='http://localhost/si1/UAS/public/user';return false;">
        </div>
    </form>
@endsection
