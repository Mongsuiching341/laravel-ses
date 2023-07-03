@extends('layouts.app')

@section('content')
    
<div class="p-4">
    <h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
</div>

@endsection
