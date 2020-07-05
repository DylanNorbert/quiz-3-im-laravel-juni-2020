@extends('layouts.master')

@section('content')
    <form action="/artikel" method='POST'>
        @csrf
        <div class="form-group">
            <label for="comment">Judul:</label>
            <br>
            <input type="text" id="fname" name="judul"><br>
        </div>
        <div class="form-group">
            <label for="comment">Tag:</label>
            <br>
            <input type="text" id="fname" name="tag"><br>
        </div>
        <div class="form-group">
            <label for="comment">Isi:</label>
            <textarea class="form-control" rows="5" id="comment" name="isi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection