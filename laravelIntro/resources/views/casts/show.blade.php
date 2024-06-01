@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
        <h1>{{ $casts->nama }}</h1>
        <p>{{ $casts->umur }}</p>
        <p>{{ $casts->bio }}</p>
        <a href="/casts" class="btn btn-secondary">Kembali</a>
@endsection
