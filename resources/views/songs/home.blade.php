@extends('master')

@section('content')
    <h1>Justin</h1>



    @foreach($songs as $song)
        <li><a href="/songs/{{$song->id}}">{{$song->title}}</a></li>
    @endforeach
@endsection