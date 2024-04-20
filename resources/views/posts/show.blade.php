@extends('layouts.app')


@section('content')
 Name: {{ $post->name }} </br>
 Decription: {{ $post->description }} </br>
    Category: {{ $post->category?->name }} </br>
 Created By: {{ $post->user?->name }} </br>

 <a href="/posts" class="btn btn-secondary btn-sm"> Back </a>
 <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm"> Edit </a>
@endsection