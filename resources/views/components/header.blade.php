<nav class="navbar fixed-top" style="background-color:#ffa500;">

    <a href="/">
    <img src="image/食事アイコン.png" width="30" height="30" >
    </a>
   
    <h1 class="text">ホーム</h1>

    @guest
    <a href="{{ route('login') }}">ログイン</a>
    @else
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    @endguest 
    
    

    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
    <!--<span class="navbar-toggler-icon"></span>-->
    <!--</button>-->
    
    <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
    <!--    <ul class="navbar-nav mr-auto">-->
    <!--        <li class="navbar-item active">-->
    <!--        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>-->
    <!--        </li>-->
    <!--        <li class="nav-item">-->
    <!--          <a class="nav-link" href="#">Link</a>  -->
    <!--        </li> -->
    <!--        <li class="nav-item dropdown">-->
    <!--            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
    <!--            Dropdown-->
    <!--            </a>-->
    <!--            <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
    <!--                <a class="dropdown-item" href="#">Action</a>-->
    <!--                <a class="dropdown-item" href="#"Another action</a>-->
    <!--                <div class="dropdown-divider"></div>-->
    <!--                <a class="dropdown-item" href="#">Something else here</a>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li class="nav-item">-->
    <!--            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
    <!--        </li>-->
    <!--    </ul>-->
    <!--    <form class="form-inline my-2 my-lg-0">-->
    <!--        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
    <!--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    <!--    </form>-->
    <!--</div>-->
</nav>