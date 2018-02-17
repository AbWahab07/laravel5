@extends('master')

@section('content')
    <h1>Home Page</h1>
    {{ $name }}
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
@stop