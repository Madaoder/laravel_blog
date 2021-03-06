@extends('home_master')
@section('content')
<div class="container-xxl py-5 mx-auto">
    @foreach($blogs as $blog)
    <div class="card mb-3 mx-auto" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $blog->title }}</h5>
            @if($blog->user)
            <h6 class="card-subtitle">{{ $blog->user->name }}</h6>
            @endif
            <div class="card-body text-end pb-0">
                <a href="{{ url('show/blog/'.$blog->id) }}" class="card-link ms-auto">link</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection