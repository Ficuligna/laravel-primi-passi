<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <script src="js/app.js" charset="utf-8"></script>
    </head>
    <body>

      @include("header")
      @include("nav")
      <h1>Ce la faremo</h1>
      <main>
        @yield("main_content")
      </main>
      @include("header")


    </body>
</html>
