<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Login')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
            </ul>
        </div>

        <div>
            <a href="{{route('logout')}}" class="btn btn-primary"> Logout </a>
        </div>
    </div>
</nav>
