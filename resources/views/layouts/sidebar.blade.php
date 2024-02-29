<div id="sidebar" class="card col-md-4 col-lg-2 d-md-block bg-light border" >
    <div class="sidebar mt-2" >
        <ul class="navbar-nav me-auto">
            @if (Route::currentRouteName()=='home')
                <li class="nav-item bg-primary text-white">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                        <b>DASHBOARD</b>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <b>DASHBOARD</b>
                    </a>
                </li>
            @endif

            @if (Route::currentRouteName()=='userIndex')
                <li class="nav-item bg-primary text-white">
                    <a class="nav-link active" aria-current="page" href="{{ route('userIndex') }}">
                        <b>MASTER PENGGUNA</b>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('userIndex') }}">
                        <b>MASTER PENGGUNA</b>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</div>