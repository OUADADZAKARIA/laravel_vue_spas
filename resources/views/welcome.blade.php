<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel Vue and SPAs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        a{
            text-decoration: none !important;
        }
    </style>

    <!-- Styles -->

</head>

<body>
    <div id="app">



        <div class="container mx-auto">
            <div class="my-5">
                <header class="d-flex align-content-center align-items-center">
                    <router-link to="/" class="text-decoration-none"><img src="/images/logo.png" alt="logo" width="50px" height="auto"></router-link>
                    <router-link to="/" class="text-decoration-none"><h1>Airakaz</h1></router-link>
                </header>

                {{-- <main>
                    <aside class="d-flex">
                        <div>
                            <router-link to="/"><a>Home</a></router-link>
                        </div>
                        <div class="mx-3">
                            <router-link to="/About"><a>About</a></router-link>
                        </div>
                    </aside>
                </main> --}}

            </div>

            <section>
                <div class="row">
                    <div class="col-md-4">

                        <h4>THE BRAND</h4>
                        <ul>
                            <li>
                                <router-link to="/logo"><a>Logo</a></router-link>
                            </li>
                            <li>
                                <router-link to="/logo-symbol"><a>Logo Symbol</a></router-link>
                            </li>
                            <li>
                                <router-link to="/colors"><a>Colors</a></router-link>
                            </li>
                            <li>
                                <router-link to="/typography"><a>Typography</a></router-link>
                            </li>
                            <li>
                                <router-link to="/cours"><a>Cours</a></router-link>
                            </li>
                        </ul>

                        <h4 class="mt-5">Doosles</h4>
                        <ul>
                            <li>
                                <router-link to="/mascot"><a>Mascot</a></router-link>
                            </li>
                            <li>
                                <router-link to="/illustrations"><a>Illustrations</a></router-link>
                            </li>
                            <li>
                                <router-link to="/loaders-and-animations"><a>Loaders and Animations</a></router-link>
                            </li>
                            <li>
                                <router-link to="/wallpapers"><a>Wallpapers</a></router-link>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8">
                        <router-view></router-view>
                    </div>
                </div>
            </section>



        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>