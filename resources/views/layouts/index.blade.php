<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Willya</title>
</head>
<body>
    <header id="header">
        <div class="container">
          <div id="logo" class="">
            {{-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> --}}
            <!-- Uncomment below if you prefer to use a text image -->
            <h1><a href="/11 - Exo-Crud/public/database">Willya</a></h1>
          </div>
    
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="">Users<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="">Projets</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Tâches</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- #nav-menu-container -->
        </div>
    </header>
      <!-- #header -->
    <div class="container">
      @yield('content')
    </div>
</body>
</html>