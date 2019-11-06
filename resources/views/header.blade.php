 <div class="container-fluid">
<div class="header">
<section class="header-in">
    <article id="logo">
        <a href="{{url('home')}}">
            <img src="{{ asset('images/digitalClothes1.png') }}" alt="logo">
        </a>
    {{-- <img src="images/digitalClothes1.png" alt="logo"> --}}
    </article>
    <article id="login">
        <form class="form-inline " id="search">
              <input class="form-control " type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success " type="submit">Go</button>
            </form>
        <div class="login-cart">
        {{-- En Laravel los operadores se escriben con "@"delante y se cierran con un "@end"nombre del operador --}}

           {{--  @if(Auth::check())
             <p>Bienvenido {{$user}} colocar avatar y </p>
            <a href="MI PERFIL"><i class="fas fa-sign-in-alt">  Login</i></a>
            @else
            <a href="{{url('login')}}"><i class="fas fa-sign-in-alt">  Login</i></a>
            <a href="{{url('signup')}}"><i class="fas fa-user-plus">  Sign up</i></a>
             @endif
            <a href="{{url('shpCrt')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i></a> --}}
        {{-- A partir de aquí el header que viene con el login de laravel a modificar --}}
        <!-- Right Side Of Navbar -->
                    {{-- <ul class="navbar-nav ml-auto"> --}}
                        <!-- Authentication Links -->
                        @guest
                            {{-- <li class="nav-item"> --}}
                                <a href="{{route('login')}}"><i class="fas fa-sign-in-alt">  {{ __('Login') }}</i></a>
                               {{--  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            {{-- </li> --}}
                            @if (Route::has('signup'))
                                {{-- <li class="nav-item"> --}}
                                    <a href="{{route('signup')}}"><i class="fas fa-user-plus">  {{ __('Sign up') }}</i></a>
                                    <a href="{{url('shpCrt')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i></a>

                            @endif
                        @else
                                <div class="login-cart" >
                                    <a  href="{{ route('logout') }}"  onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt">{{ __('Logout') }}</i>
                                    </a>
                                    <a href="{{url('shpCrt')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i></a>
                                    <p>Bienvenido {{ Auth::user()->firstName }}</p>
                                    <a href="{{url('user_profile', Auth::user()->id)}}">Profile</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            {{-- </li> --}}
                        @endguest
                    {{-- </ul> --}}
        </div>
    </article>

</section>
</div>
