<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('register')}}">Register</a>
        <a href="{{route('login')}}">Login</a>
        <br>
        </div>
        @yield('content')
    </body>
</html>