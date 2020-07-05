@extends('layouts.master')

@section('content')
<h1>Daftar Artikel</h1>
    <form action="/artikel/create">
    <button type="submit" class="btn btn-md btn-info">Artikel Baru</button>
    <br>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul Artikel</th>
            <th>Isi Artikel</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artikel as $key => $q)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $q->judul }}</td>
                <td>{{ $q->isi }}</td>
                <td>
                <a href="/artikel/{{$q->id}}" class="btn btn-sm btn-info">Detail</a>
                <a href="/artikel/{{$q->id}}/edit" class="btn btn-sm btn-white">Edit</a>
                <form style="display:inline" action="/artikel/{{$q->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection