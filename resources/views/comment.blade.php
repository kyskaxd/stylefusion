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
    <main>
        <div class="com">
            <div class="com-t">
                <textarea placeholder="Товар" class="zag"></textarea>
                <textarea placeholder="Комментарий" class="op"></textarea>
            </div>
            <button class="button">Оставить комментарий</button>
        </div>
    </main>
</body>
</html>