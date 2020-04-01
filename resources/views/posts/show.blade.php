@extends('layouts.app')

@section('content')

<div class="text-center jumbotron">
    <h1>{{$posts->title}}</h1>
    
    <div class="card-body">
        {{$posts->body}}
    </div>
</div>
<small>Written on {{$posts->created_at}}</small>
<hr>

<a class="btn btn-default bg-light" href="/Posts">Back</a>
@endsection