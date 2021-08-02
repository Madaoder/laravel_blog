<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 sticky-top">
    <div class="container-fluid mx-5">
        <a class="navbar-brand" href="{{url('/')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-3" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('add/blog/')}}">add</a>
                </li>
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('my/')}}">my post</a>
                </li>
                @endif
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <ul class="navbar-nav">
                @if(Auth::user())
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="nav-link btn btn-link" aria-current="page">logout</button>
                    </form>
                </li>
                @else
                <li class=" nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('login')}}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('register')}}">register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>