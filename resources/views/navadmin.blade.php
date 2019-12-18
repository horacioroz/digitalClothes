<nav {{-- id="nav-bar"  --}}class="navbar navbar-expand-lg navbar-light bg-light">
  {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg-secondary" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active" >
        <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('product_list')}}">Listado</a>
          <a class="dropdown-item" href="{{route('product_create')}}">Crear</a>
          <a class="dropdown-item" href="{{url('art_list')}}">Listado Web</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('category_list')}}">Listado</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Colores</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('color_list')}}">Listado</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Talles</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('size_list')}}">Listado</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{url('users_list')}}">Listado</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      {{-- <li class="nav-item dropdown">
        <a class="nav-link " href="{{url('art_list')}}" id="navbarMenuLink" >
          Product List
        </a>
      </li> --}}

     {{--  <li class="nav-item dropdown">
        <a class="nav-link " href="{{url('faq')}}" id="navbarMenuLink" >
          FaQ
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="{{url('contact')}}" id="navbarMenuLink" >
          Contact Us
        </a> --}}
    </li>
    </ul>
  </div>
</nav>
