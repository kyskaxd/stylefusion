@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body >

    @yield('head')

   <main>
    <div class="main">
        <img class="zxc" src="{{ asset('img/freepic.png') }}">
        <div class="ne-img">
            <div class="ne-img-t">
                <p>Имя: {{auth()->user()->name}}</p>
                <p>Login: {{auth()->user()->login}}</p>
                <p>Адрес эл. почты: {{auth()->user()->email}}</p>
            </div> 
        <a href="{{ route('logout') }}"><button class="button">Выйти</button></a>
    </div>
    </div>  
   </main> 
   
</body>
</html>