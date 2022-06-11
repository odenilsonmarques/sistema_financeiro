<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="container">
            <ul class="nav justify-content-end navbar-secondary">
                <li class="nav-item">
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>
        </div><br>
    </header>

    <article>
        @yield('content')
    </article>

    <footer>

    </footer>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{asset('assets/js/script.js')}}"></script> -->
</body>
</html>