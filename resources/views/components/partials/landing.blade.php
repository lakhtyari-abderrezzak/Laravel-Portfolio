    <!-- Start Landing  -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1 id="random-heading">{{ __('landing.header') }}</h1>
                <p>{{ __('landing.description') }}</p>
                <div class="btn">
                    <i class="fa-solid fa-download"></i>
                    <a href="{{asset('resume/full-stack-resume.pdf')}}" download="Abderrazzak-Lakhtyari.pdf" class="download-btn"> {{ __('landing.btn') }} </a>
                </div>
            </div>
            <div class="image">
                <img id="landing-img" class="h-400" src="{{ asset('images/landing-image.png') }}" alt="">
            </div>
        </div>

    </div>
    <!-- End Landing  -->
