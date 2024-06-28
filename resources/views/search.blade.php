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
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>
<body>
    @yield('head')
    <p>Каталог товаров</p>
    <div class="all"></div>
    <div class="product-grid">
        @foreach($products as $product)
            <div class="product-item">
                <img src="{{ $product->path_product }}" class="card_img" alt="картинка не найдена">
                <p> {{ $product->name_product }}</p>

                

                <a href="{{ route('product', ['id' => $product->id  ]) }}"><button type="submit" class="podrob">
                        <span class="text">Подробнее</span>
                    </button></a>
            </div>
        @endforeach
    </div>
    
    

</body>
</html>