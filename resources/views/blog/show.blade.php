@extends('home_master')

@section('content')

<div class="card" style="width: 60rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $blog->title }}</h5>
        <p class="card-text">{!!nl2br($blog->content)!!}</p>
    </div>
</div>
<a class="btn btn-success" href="{{ url('edit/blog/'.$blog->id) }}">Edit</a>
<a class="btn btn-danger" href="{{ url('delete/blog/'.$blog->id) }}">Delete</a>

@endsection