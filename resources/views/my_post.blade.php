@extends('home_master')
@section('content')
<div class="container-xxl py-5 mx-auto">
    @foreach($blogs as $blog)
    <div class="card mb-3 mx-auto" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $blog->title }}</h5>
            <div class="card-body text-end">
                <a href="{{ url('show/blog/'.$blog->id) }}" class="card-link ms-auto">link</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection