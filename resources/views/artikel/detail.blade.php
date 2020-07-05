@extends('layouts.master')

@section('content')
    <div>
    <h1>Judul : {{$data->judul}}</h1>
    <h3>Isi : {{$data->isi}}</h3>
    <a class="btn btn-sm btn-warning">{{$data->tag}}</a>
    </div>
@endsection