@extends('layouts.app')


@section('content')
 <h1> {{ $post->title }}</h1>
 <h1> {{ $post->content }}</h1>
 <h1> {{ $post->id }}</h1>
 
@endsection