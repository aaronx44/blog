@extends('layouts.app')

@section('content')

<div class="text-center jumbotron">
    <h3>POSTS</h3>
</div>

@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="card card-body bg-light">
    <h3>
        <a class="nav-link" href="/Posts/{{$post->id}}">{{$post->title}}</a>
    </h3>
    <small>Written on {{$post->created_at}}</small>

</div>

@endforeach
{{$posts->links()}}
@else

<p>No Post Found</p>
    
@endif

@endsection