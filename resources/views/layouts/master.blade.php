<!DOCTYPE html>
<html>
        @include('head')
         {{ Html::style('css/home.css') }}

        </head>

    <body>

        @include('header')
        @include('navprueba')
        <div class="container col-12" style="width:100%;padding:0;margin:0 auto;">
            @yield('content')

        </div>
        @include('footer')
        @include('scripts')
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

        @yield('scripts')
    </body>
</html>
