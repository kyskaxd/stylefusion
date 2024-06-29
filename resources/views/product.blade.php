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
    <link rel="stylesheet" href="{{ asset('css/comment.css') }}">
</head>
<body>
    @yield('head')
    <div class="card">

        <div class="card" style="">
            <div class="card-body">
                <img src="{{ asset($product->path_product) }}"  class="card_img2" alt="картинка не найдена">
                <p><b>Название:</b> {{ $product->name_product }}</p>
                <p><b>Описание:</b> {{ $product->model_product }}</p>
                
            </div>
        </div>

    </div>
</body>
</html>