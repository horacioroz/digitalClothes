<!DOCTYPE html>
<html>
        @include('head')
         {{ Html::style('css/home.css') }}
         {{-- {{ HTML::style('css/basic.css')}} --}}
        {{ HTML::script('js/dropzone.js')}}

        </head>

    <body>

        @include('header')
        @include('navadmin')
        <div class="container col-12" style="width:100%;padding:0;margin:0 auto;">
            @yield('content')
            @yield('scripts')


        </div>
        @include('footer')
        @include('scripts')
    </body>
</html>
