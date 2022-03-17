<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <a class="navbar-brand ml-4" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto mr-5">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">新規登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
            </li>
            @else
             <li class="nav-item mr-5">
                 <a class="nav-link" href="{{ route('mypage') }}">
                     <i class="fas fa-user mr-1"></i><label>マイページ</label>
                 </a>
             </li>
            @endguest
        </ul>
    </div>
</nav>
