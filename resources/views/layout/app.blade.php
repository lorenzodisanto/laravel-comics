<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>{{ env('APP_NAME') }} - @yield('page-title')</title>
    <link rel="icon" href="{{ Vite::asset('/resources/images/favicon.ico')}}">

    @vite('resources/js/app.js')
  </head>

  <body>
    @include('partials.header')

    @include('partials.jumbotron')

    @yield('main-content')

    @include('partials.footer')
  </body>

</html>