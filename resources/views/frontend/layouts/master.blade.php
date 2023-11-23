<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('White Label Digital Marketing & SEO Services Agency | YDR') }}</title>
    @include('frontend.layouts.head')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="row">
            @include('frontend.layouts.main-header')
        </header>

        @yield('content')

        <footer class="row">
            @include('frontend.layouts.footer')
        </footer>
        
       
         

    </div>

    <nav>@include('frontend.layouts.navbar')</nav>
    
    @include('frontend.layouts.footer-scripts')
    
    
   
    

</body>
</html>

