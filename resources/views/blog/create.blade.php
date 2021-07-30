@extends('home_master')

@section('content')
<div class="container">
    <form action="{{ url('create/blog/') }}" method="Post">
        @csrf
        <div class="col-3">
            <div class=" mb-3">
                <label class="form-label  text-white" for="title">Title</label>
                <input type="text" class="form-control" placeholder="Enter The Title" id="title" name="title">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label  text-white" for="content">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Enter The Content" cols="30" rows="20"></textarea>
        </div>
        <button>Submit</button>
    </form>
</div>
@endsection