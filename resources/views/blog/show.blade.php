@extends('home_master')

@section('content')

<div class="card mx-auto" style="width: 60rem;">
    <div class="card-body">
        <h3 class="card-title">{{ $blog->title }}</h3>
        @if($blog->user_id)
        <h4 class="card-subtitle">{{ $blog->user->name }}</h4>
        @endif
        <p class="card-text">{!!nl2br($blog->content)!!}</p>
    </div>
</div>
@if(Auth::user() == $blog->user)
<a class="btn btn-success" href="{{ url('edit/blog/'.$blog->id) }}">Edit</a>
<a class="btn btn-danger" href="{{ url('delete/blog/'.$blog->id) }}">Delete</a>
@endif

@endsection