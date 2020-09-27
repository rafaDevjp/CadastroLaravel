<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'app')</title>
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
</head>
<body>
    
  <section>
      @yield('Conteudo-dinamico')
  </section>
<script src="{{URL::asset('/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('/js/main.js')}}"></script>
</body>
</html>