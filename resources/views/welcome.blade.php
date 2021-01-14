<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <div id="app">



        <div class="container mx-auto">
            <div class="my-5">
                <header class="d-flex align-content-center align-items-center">
                    <div>
                        <img src="/images/logo.png" alt="logo" width="50px" height="auto">
                    </div>
                   
                    <h1>Airakaz</h1>
                </header>
    
                <main>
                    <aside class="d-flex">
                        <div>
                            <router-link to="/"><a>Home</a></router-link>
                        </div>
                        <div class="mx-3">
                            <router-link to="/about"><a>About</a></router-link>
                        </div>
                    </aside>
                </main>
    
            </div>
           
            <section>
                <div class="row">
                    <div class="col-md-4">
                        <h4>THE BRAND</h4>
                        <ul>
                            <li>Logo</li>
                            <li>Logo Symbol</li>
                            <li>Colors</li>
                            <li>Typography</li>
                        </ul>

                        <h4>Doosles</h4>
                        <ul>
                            <li>Mascot</li>
                            <li>Illustrations</li>
                            <li>Loaders and Animations</li>
                            <li>Wallpapers</li>
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