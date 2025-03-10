<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title> <!-- 各ページでタイトルを設定 -->
    <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
    <link
        href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        rel="stylesheet"
        type="text/css" />
    <link
        href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic"
        rel="stylesheet"
        type="text/css" />
    <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
    <link rel="stylesheet" href="//demo.productionready.io/main.css" />
    <script src="{{ asset('js/flash-message.js') }}"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">conduit</a>
                <ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item">
                        <!-- Add "active" class when you're on that page" -->
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Log out</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content') <!-- ここに各ページのコンテンツが入る -->
    </main>

    <footer>
        <footer>
            <div class="container">
                <a href="/" class="logo-font">conduit</a>
                <span class="attribution">
                    An interactive learning project from <a href="https://thinkster.io">Thinkster</a>. Code &amp;
                    design licensed under MIT.
                </span>
            </div>
        </footer>
    </footer>
</body>

</html>