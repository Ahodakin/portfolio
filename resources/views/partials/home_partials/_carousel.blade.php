<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(front_end/assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Ravie de vous accueillir sur mon <span>portfolio personnel.</span></h2>
              <p>Bienvenue sur mon portfolio en ligne ! J'ai créé ce site pour partager mes réalisations et mes projets avec vous, dans le but de vous donner un aperçu de mes compétences et de mon expertise. N'hésitez pas à explorer mon portfolio et à me contacter si vous avez des commentaires ou des questions.</p>
              <div class="text-center"><a href="{{ ('front_end/assets\img/CV.pdf') }}" download="Reine Ahodakin CV.pdf" class="btn-get-started">Télécharger le CV</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(front_end/assets/img/slide/slide.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <h2>Ravie de vous accueillir sur mon <span>portfolio personnel.</span></h2>
              <p>Bienvenue sur mon portfolio en ligne ! J'ai créé ce site pour partager mes réalisations et mes projets avec vous, dans le but de vous donner un aperçu de mes compétences et de mon expertise. N'hésitez pas à explorer mon portfolio et à me contacter si vous avez des commentaires ou des questions.</p>
              <div class="text-center"><a href="{{ asset('front_end/assets\img/CV.pdf') }}" download="Reine Ahodakin CV.pdf" class="btn-get-started">Télécharger le CV</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(front_end/assets/img/slide/slide-.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
            <h2>Ravie de vous accueillir sur mon <span>portfolio personnel.</span></h2>
              <p>Bienvenue sur mon portfolio en ligne ! J'ai créé ce site pour partager mes réalisations et mes projets avec vous, dans le but de vous donner un aperçu de mes compétences et de mon expertise. N'hésitez pas à explorer mon portfolio et à me contacter si vous avez des commentaires ou des questions.</p>
              <div class="text-center"><a href="{{ asset('front_end/assets\img/CV.pdf') }}" download="Reine Ahodakin CV.pdf" class="btn-get-started">Télécharger le CV</a></div>
            </div>
          </div>
        </div>

      </div>

      <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_P0WCrcHw02.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <div class="designe_end">
    <img src="{{ asset('front_end/assets/img/designe_end/designe_end-1.png') }}" alt="">
  </div>
  {{-- <lottie-player id="firstLottie" src="https://assets5.lottiefiles.com/packages/lf20_dlw10cqe.json" style="width:400px; height: 400px;"></lottie-player> --}}
