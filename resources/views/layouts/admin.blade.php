<!DOCTYPE html>
<html>
        @include('head')
         {{ Html::style('css/home.css') }}

        </head>

    <body>

        @include('header')
        @include('navadmin')
        <div class="container col-12" style="width:100%;padding:0;margin:0 auto;">
            @yield('content')

        </div>
        @include('footer')
        @include('scripts')
    </body>
</html>
