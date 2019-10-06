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
            @if(Auth::check())
             <p>Bienvenido {{$user}} colocar avatar y </p>
            <a href="MI PERFIL"><i class="fas fa-sign-in-alt">  Login</i></a>
            @else
            <a href="{{url('login')}}"><i class="fas fa-sign-in-alt">  Login</i></a>
            <a href="{{url('signup')}}"><i class="fas fa-user-plus">  Sign up</i></a>
             @endif
            <a href="{{url('shpCrt')}}"><i class="fas fa-shopping-cart">  Shopping Cart</i></a>
        </div>
    </article>

</section>
</div>
