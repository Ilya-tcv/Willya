<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Willya</title>
</head>
<body>
    <header id="header">
        <div class="container">
          <div id="logo" class="pull-left">
            {{-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> --}}
            <!-- Uncomment below if you prefer to use a text image -->
            <h1><a href="/11 - Exo-Crud/public/database">DATABASE CHANGER</a></h1>
          </div>
    
          <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="/11 - Exo-Crud/public/">Main Site</a></li>
                <li><a href="/11 - Exo-Crud/public/database/about">About Us</a></li>
              <li><a href="/11 - Exo-Crud/public/database/services">Services</a></li>
              <li><a href="/11 - Exo-Crud/public/database/portfolio">Portfolio</a></li>
              <li><a href="/11 - Exo-Crud/public/database/testimonials">Testimonials</a></li>
              <li><a href="/11 - Exo-Crud/public/database/team">Team</a></li>
              <li><a href="/11 - Exo-Crud/public/database/messages">Messages</a></li>
            </ul>
          </nav>
          <!-- #nav-menu-container -->
        </div>
    </header>
      <!-- #header -->

    @yield('content')

    <footer id="footer" style="position: absolute;bottom:0;width:100%">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright">
                &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- #footer -->
</body>
</html>