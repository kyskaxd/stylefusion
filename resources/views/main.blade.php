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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @yield('head')
    <main>
        <div class="bigpic">
            <div>
                <div class="bigpic-b"></div>
                <div class="bigpic-t">
                    <div class="bp-t-all">
                    <p class="bp-t-z">StyleFusion</p>
                    <p class="bp-t-zs zxc">Наши лучшие дизайнеры  и специалисты, готовые помочь Вам с Вашим лучшим дизайном</p>
                    <p class="bp-t-zs zcx">Надежность работы - наша забота Радоваться - ваша забота </p>
                    <p class="bp-t-zs zcx">Дизайн, который заслуживает доверия - Style Fusion</p>
                    </div>
                </div>
            </div> 
        </div>  
        <a href="{{ route('search') }}">
            <div class="kn-d">
                <p class="kn-t">Подобрать себе лучший Дизайн</p>
            </div>
        </a>
        <div class="foot">
            <p class="foot-t">Популярные Дизайны</p>
            <div>
                
            </div>
        </div>
    </main>
</body>
</html>