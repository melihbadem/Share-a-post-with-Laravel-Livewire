<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="{{asset('js')}}/app.js"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="/">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/addpost">Add Post</a>
                </li>
                  <livewire:logout />
                @endauth

                @guest
                <li class="nav-item">
                  <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                @endguest
              </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
    
    @livewireScripts
 </body>
</html>