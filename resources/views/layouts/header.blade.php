<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('add/blog/')}}">add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('login/')}}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('register/')}}">register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>