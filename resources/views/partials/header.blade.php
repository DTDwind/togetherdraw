<header class="p-3 bg-dark text-white">
<div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img width="40" src="{{ asset('picture/icon.png') }}">
    </a>

    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home') }}" class="nav-link px-2  {{ Route::currentRouteNamed('home') ? 'text-secondary' : 'text-white' }}">首頁</a></li>
        <li><a href="{{ route('blog') }}" class="nav-link px-2  {{ Route::currentRouteNamed('blog') ? 'text-secondary' : 'text-white' }}">留言板</a></li>
        <li><a href="{{ route('member') }}" class="nav-link px-2 {{ Route::currentRouteNamed('member') ? 'text-secondary' : 'text-white' }}">團員介紹</a></li>

    </ul>

    <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
    </form> -->

    <div class="text-end">
    @auth
        <div class="dropdown">
            <div class="dropdown-toggle" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                您好，{{ Auth::user()->name }} 
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item text-center" href="{{ route('logout') }}">登出</a></li>
            </ul>
        </div>
    @else
        <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light me-2">登入</button></a>
        <a href="{{ route('signup') }}"><button type="button" class="btn btn-warning me-2">註冊</button></a>
    @endauth
        <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
    </div>
    </div>
</div>
</header>