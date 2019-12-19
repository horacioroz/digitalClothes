<div class="container-fluid">
    <div class="header">
        <section class="header-in">
            <article id="logo">
                <a  href="{{url('home')}}">
                    <img src="{{ asset('images/digitalClothes1.png') }}" alt="logo">
                </a>
            </article>
            <article id="login">
                <form class="form-inline " id="search">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark ml-1 " type="submit">Go</button>
                </form>
                <div class="container-fluid row login-cart">
                    <!-- Authentication Links -->
                    <ul>


                    @guest

                  <li>  <a class="" href="{{route('login')}}"><i class="fas fa-sign-in-alt">  {{ __('Login') }}</i></a> </li>
                    @if (Route::has('signup'))
                  <li>   <a class="" href="{{route('signup')}}"><i class="fas fa-user-plus">  {{ __('Sign up') }}</i></a></li>
                  <li>   <a class="mt-1" href="{{ route('product.shoppingCart')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i>
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a></li>
                    @endif
                    @else
                    <div class="login-cart" >
                  <li>       <a  class="mt-1" href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt">{{ __('Logout') }}</i>
                    </a> </li>
                <li>     <a class="mt-1 " href="{{url('shopping_Cart')}}"><i class="fas fa-shopping-cart"> Carrito</i>
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a> </li>
                  <li>   <p class="mt-3 header_hoverlinks">Bienvenido {{ Auth::user()->firstName }}</p> </li>
                  <li>   <a class="mt-1 header_hoverlinks" href="{{url('user_profile', Auth::user()->id)}}">Profile</a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @if (Auth::user()-> email =="juanimeliausa@gmail.com" || "digitalClothes@gmail.com")
                  <li>     <a class="mt-1 header_hoverlinks" href={{url('product_list')}}>Panel admin</a> </li>
                    @endif
                    </ul>
                </div>


              @endguest
            </div>
        </article>
    </section>
</div>
