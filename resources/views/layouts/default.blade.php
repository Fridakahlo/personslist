<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
   @include('includes.head')
</head>
<body>
    @section('header')
        @include('includes.header')
    @show

    <main>
        @yield('content')
    </main>
   
    @include('includes.footer')
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Utilitary Bootsrap 4 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--  -->
</body>
</html>