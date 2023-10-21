 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><span>Reine</span>Ahodakin</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>

          <li class="dropdown"><a href="#"><span>A Propos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ Route('about') }}">A Propos de Moi</a></li>
            </ul>
          </li>

          <li><a href="{{ Route('services') }}">Services</a></li>
          <li><a href="{{ Route('portfolio') }}">Portfolio</a></li>
          {{--  <li><a href="{{ Route('faq') }}">FAQ</a></li>  --}}
          <li><a href="{{ Route('contact') }}">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
