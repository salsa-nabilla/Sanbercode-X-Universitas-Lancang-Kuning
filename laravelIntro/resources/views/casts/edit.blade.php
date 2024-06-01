@extends('layouts.master')

@section('title')
    Edit Cas
@endsection
@section('content')
        <form action="/casts/{{$casts->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $casts->nama }}" >
            </div>
            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" name="umur" class="form-control" value="{{ $casts->umur }}" >
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" class="form-control" >{{ $casts->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
@endsection
