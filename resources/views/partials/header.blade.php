<div class="bg-blu text-white">
    <div class="container">
        <div class="col-12 d-flex justify-content-end">
            <span class="me-5">DC POWER &#8480; VISA &#174;</span>
            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down ms-2" style="color: #fff;"></i></span>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <a href="{{ url('/') }}">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" class="img-logo">
                </a>
                <ul class="list-unstyled d-flex ms-5 text-uppercase">
                    <li class="nav-link">
                        <a href="#" class="link">Characters</a>
                    </li>
                    <li class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_li' : ''}}">
                        <a href="{{ route('homepage') }}" class="link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_a' : ''}}">Comics</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">Movies</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">TV</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">Games</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">Collectibles</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">Videos</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">Fans</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link">News</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link d-flex align-items-center">Shop <i class="fa-solid fa-caret-down ms-2" style="color: #0074e8;"></i></a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search d-flex">
                            <input type="text" class="form-control border-0" placeholder="Search">
                            <i class="fa fa-search align-self-center"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
