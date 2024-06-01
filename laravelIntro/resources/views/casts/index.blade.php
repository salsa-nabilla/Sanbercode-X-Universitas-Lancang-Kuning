@extends('layouts.master')

@section('title')
List of Casts
@endsection

@section('content')
    <div class="container">
        <a href="/casts/create" class="btn btn-primary mb-3">Add New Cast</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($casts as $key=>$cast)
                    <tr>
                        <th scope="row">{{$key + 1}}
                        <td>{{ $cast->nama }}</td>
                        <td>{{ $cast->umur }}</td>
                        <td>
                            <form action="/casts/{{$cast->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/casts/{{$cast->id}}" class="btn btn-info">View</a>
                                <a href="/casts/{{$cast->id}}/edit" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>   
                    @empty
                <tr>
                    <th>Tidak Ada Cast</th>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
@endsection
