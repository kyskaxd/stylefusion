


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
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
 
   @section('head')
    <header>
      
        <div class="header-major">
          <div class="logo-nazv" >
          <a href="{{route('main')}}"><img src="{{ asset('img/logo.jpg') }}" class="logo-img"></a>
          <a href="{{route('main')}}" class="nazv"><p>StyleFusion</p></a>
          </div>
          <button id="strdown" class="strup strdown"></button>
          <div class="regilog">
            @auth
            <a href="{{route('profile')}}"><div class="ril-r-auth">
              <p class="ril-t">{{auth()->user()->name}}</p>
            </div></a>
            @endauth
            @guest
            <a href="{{route('register')}}"><div class="ril-r">
              <p class="ril-t">Регистрация</p>
            </div></a>
            <a href="{{route('profile')}}"><div class="ril-l">
              <p class="ril-t">Войти</p>
            </div></a>
            @endguest
          </div>
        </div>
        <div id="hm" class="header-minor disp box">
          <div class="pop">
          <a href="{{route('bedroom')}}"><div class="ril-r">
            <p class="ril-t">Спальни</p>
          </div></a>
          <a href="{{route('kitchen')}}"><div class="ril-r">
            <p class="ril-t">Кухни</p>
          </div></a>
          <a href="{{route('livingroom')}}"><div class="ril-r">
            <p class="ril-t">Гостинные</p>
          </div></a>
          <a href="{{route('bathroom')}}"><div class="ril-r">
            <p class="ril-t">Ванны</p>
          </div></a>
          <a href="{{route('about')}}"><div class="ril-r">
            <p class="ril-t">О нас</p>
          </div></a>
          <a href="{{route('admin')}}"><div class="ril-r">
            <p class="ril-t">Админ</p>
          </div></a>
        </div>
        </div>
            
      
    </header>
    
    
    <script>
      
      const strdown = document.querySelector('#strdown');
      const hm = document.querySelector('#hm');
      strdown.addEventListener('click', () => {
        if(hm.classList.contains('disp') == true) {
          hm.classList.remove('disp');
          hm.classList.add('box');
          strdown.classList.remove('strdown');
        } else {
          hm.classList.add('disp');
          hm.classList.remove('box');
          strdown.classList.add('strdown');
        }
      })
      
    </script>
    @endsection
</body>
</html>