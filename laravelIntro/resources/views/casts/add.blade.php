@extends('layouts.master')

@section('title')
    Add New Cast
@endsection

@section('content')
        <form action="/casts" method="POST">
            {{-- validation --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>             
                    @endforeach
                </ul>
            </div>
            @endif
             {{-- form input --}}
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" >
            </div>
            <div class="form-group">
                <label for="age">Umur</label>
                <input type="number" name="umur" class="form-control" >
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" class="form-control" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
@endsection