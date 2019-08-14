<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.test.submit();
        }
    }

    function send($req){
        document.getElementById("text").innerHTML = $req;
    }
</script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
<div class="row">
<div class="col-md-12 text-center">
            <form method="POST" name="test" action="/insert">
                            {{ csrf_field() }}
                            <input type="text" name="item_name">
                        </form>

                        <div id="text"></div>
                <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Button</button>
  <div id="myDropdown" class="dropdown-content">
  @foreach ($all as $item)
    <a href="#" onclick="send('{{$item->item_name}}')">{{$item->item_name}}</a>
    @endforeach
  </div>
</div>
</div>
</div>

            </div>
        </nav>
        <div>

        </div>
    </div>
       
    <!-- Scripts -->

    




<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/script.js') }}" defer></script>
      
</body>

</html>