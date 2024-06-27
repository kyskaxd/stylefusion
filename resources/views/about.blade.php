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
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    @yield('head')
    <main>
        <div class="main">
            <div class="gram">
                <p class="gr-t">Грамоты и Достижения проекта</p>
                <div class="dip-all">
                    <img class="dip" src="{{ asset('img/dip.jpg') }}">
                    <img class="dip" src="{{ asset('img/dip.jpg') }}">
                    <img class="dip" src="{{ asset('img/dip.jpg') }}">
                </div>
            </div>
            <div class="create">
                <p class="gr-t">О создателях проекта</p>
                <div class="ooo">
                    <p class="avat-t">
                        Арсений Козлов - создатель, и ведущий разработчик сайта, 
                        решил создать сайт потому что очень любит дизайны интерьера,
                        образцовый работник и вообще норм чел.
                    </p>
                    <img class="avat" src="{{ asset('img/avatar.jpg') }}">
                </div>
            </div>
            <div class="map">
                <p class="gr-t">Нас можно найти здесь</p>
                <div class="mapp">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa78cdadef23c0b7795c3d899dbd93fe48f96b355340ced736eae6dcff1b44387&amp;width=700&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
                    <div    class="map-t">
                    <p class="gr-t">Нас можно найти здесь</p>
                    <p>Номер телефона: +78005553535</p>
                    <p>Адрес эл. почты: zxc@mail.ru</p>
                    <p>Адрес: Ул. Пушкина дом колотушкина</p>
                    </div>
                </div> 
            </div>
        </div>
    </main>
    
</body>
</html>