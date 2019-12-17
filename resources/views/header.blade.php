<div class="container-fluid">
    <div class="header">
        <section class="header-in">
            <article id="logo">
                <a href="{{url('home')}}">
                    <img src="{{ asset('images/digitalClothes1.png') }}" alt="logo">
                </a>
            </article>
            <article id="login">
                <form class="form-inline " id="search">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success " type="submit">Go</button>
                </form>
                <div class="login-cart">
                    <!-- Authentication Links -->
                    @guest
                    <a href="{{route('login')}}"><i class="fas fa-sign-in-alt">  {{ __('Login') }}</i></a>
                    @if (Route::has('signup'))
                    <a href="{{route('signup')}}"><i class="fas fa-user-plus">  {{ __('Sign up') }}</i></a>
                    <a href="{{ route('product.shoppingCart')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i>
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a>
                    @endif
                    @else
                    <div class="login-cart" >
                        <a  href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt">{{ __('Logout') }}</i>
                    </a>
                    <a href="{{url('shopping_Cart')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i>
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a>
                    <p>Bienvenido {{ Auth::user()->firstName }}</p>
                    <a href="{{url('user_profile', Auth::user()->id)}}">Profile</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                @endguest
            </div>
        </article>
    </section>
</div>
