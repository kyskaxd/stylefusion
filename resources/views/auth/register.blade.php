<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up from</title>
     
     
    <!-- css stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
</head>
<body>
    <div class="message">
    <ul>
        @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
    </div>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <h1>Зарегистрироваться</h1>
                
                
                <div class="infield">
                    <input type="text" value="{{ old('name') }}" placeholder="Имя" name="name" id="email-i" class="name"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="text" value="{{ old('login') }}" placeholder="Логин" name="login" id="email-i" class="login"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" value="{{ old('email') }}" placeholder="Почта" name="email" id="email-i" class="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Пароль" id="email-i" name="password" class="password"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Повторите пароль" id="email-i" name="password_confirmation" class="rpassword"/>
                    <label></label>
                </div>
                <button type="submit" id="button">Зарегистрироваться</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h1>Войти</h1>
                
                
                <div class="infield">
                    <input type="email" placeholder="Почта" name="email" id="email-i" class="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Пароль" name="password" id="email-i" class="password"/>
                    <label></label>
                </div>
                
                <button id="button">Войти</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="priv">Приветствуем!</h1>
                    <p>Чтобы оставаться на связи с нами, пожалуйста, войдите.</p>
                    <button id="button">Войти</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Привет, друг!</h1>
                    <p>Введите свои данные и начните путешествие вместе с нами</p>
                    <button id="button">Зарегистрироваться</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>

    
    
    <!-- js code -->
    <script>
    
    const container = document.getElementById('container');
    const overlayCon = document.getElementById('overlayCon');
    const overlayBtn = document.getElementById('overlayBtn');

    overlayBtn.addEventListener('click', () => {
        container.classList.toggle('right-panel-active');
    });
    </script>

    

</body>
</html>
