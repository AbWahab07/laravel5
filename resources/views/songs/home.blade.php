@extends('master')

@section('content')
    <h1>Justin</h1>



    @foreach($songs as $song)

        <!--
        <li>
            <a href="{{ route('song_path', [$song->handle]) }}">{{$song->title}}</a>
        </li>
        -->

        <li>
            {!! link_to_route('song_path', $song->title, [$song->handle]) !!}
        </li>
    @endforeach
@endsection