@extends('home_master')

@section('content')
<div class="container">
    <form action="{{ url('edit/blog/'.$blog->id) }}" method="Post">
        @csrf
        <div class="col-3">
            <div class=" mb-3">
                <label class="form-label  text-white" for="title">Title</label>
                <input type="text" class="form-control" value="{{ $blog->title }}" id="title" name="title">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label  text-white" for="content">Content</label>
            <textarea class="form-control" id="content" name="content" cols="30" rows="20">{!!nl2br($blog->content)!!}</textarea>
        </div>
        <button>Submit</button>
    </form>
</div>
@endsection