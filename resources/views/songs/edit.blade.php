@extends('master')

@section('content')
    <h1>Edit {{$song->title}}</h1>

    {!!  Form::model($song, ['route' => ['song_edit_path', $song->handle], 'method' => 'PATCH' ]) !!}

        @include('songs._form')

    {!! Form::close()  !!}
@endsection