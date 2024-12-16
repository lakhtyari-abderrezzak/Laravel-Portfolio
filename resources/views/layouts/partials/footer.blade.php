    <!-- footer section starts  -->
    <footer class="text-center text-muted py-4">
        <h3 class="pt-4" data-aos="fade-up"> <x-application-logo /> </h3>
        <div class="link-group mt-5 d-flex justify-content-center" data-aos="fade-up">
          <x-nav-link href="{{route('home')}}"> {{ __('Home') }}</x-nav-link>
          <div class="vr"></div>
          <x-nav-link href="{{route('home')}}"> {{ __('Services') }}</x-nav-link>
          <div class="vr"></div>
          <x-nav-link href="{{route('home')}}"> {{ __('Portfolio') }} </x-nav-link>
          <div class="vr"></div>
          <x-nav-link href="{{route('home')}}"> {{ __('Testemonials') }}</x-nav-link>
          <div class="vr"></div>
          <x-nav-link href="{{route('home')}}"> {{ __('Blog') }}</x-nav-link>
          <div class="vr"></div> 
          <x-nav-link href="{{route('home')}}"> {{ __('Contact') }}</x-nav-link>
        </div>
        <div class="social-links mt-5" data-aos="fade-up">
          <button href="" class="rounded-pill dribble">
            <i class="bi bi-dribbble"></i>
          </button>
          <button href="" class="rounded-pill whatsapp">
            <i class="bi bi-whatsapp"></i>
          </button>
          <button href="" class="rounded-pill behance">
            <i class="bi bi-behance"></i>
          </button>
        </div>
        <hr class="text-muted my-4" />
  
        <p>Copyright 2024 &lt; Hizo /&gt;  | All Rights Reserved.</p>
      </footer>
      <!-- footer section ends here -->
  
        <!-- bootstrap javascript cdn link  -->
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
      ></script>
  
      <!-- AOS library javascript link  -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        // initializing AOS library
        AOS.init({
          duration: 1000,
          offset: 50,
        });
      </script>
      <!-- custom js file linking -->
      <script src="js/script.js"></script>