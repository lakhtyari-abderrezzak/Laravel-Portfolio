<div class="container">
    <x-application-logo />
    <ul class="main-nav">
        <li><a href="{{ route('home') }}">{{ __('nav.home') }}</a></li>
        <li><a href="{{ route('home') }}#about">{{ __('nav.about') }}</a></li>
        <li><a href="{{ route('home') }}#projects">{{ __('nav.projects') }}</a></li>
        <li><a href="{{ route('home') }}#our-skills">{{ __('nav.skills') }}</a></li>
        <li class="other-links">
            <a> {{ __('nav.other-links') }} </a>
            <!-- Start Megamenu -->
            <ul class="mega-menu">
                <div class="image">
                    <img src="{{ asset('images/megamenu.png') }}" alt="">
                </div>
                <ul class="links">
                    <li><a href="{{ route('home') }}#testemonials"><i
                                class="far fa-comments fa-fw"></i>{{ __('nav.testemonials') }}</a></li>
                    <li><a href="{{ route('home') }}#stats"><i
                                class="far fa-chart-bar fa-fw"></i>{{ __('nav.stats') }}</a></li>
                    <li><a href="{{ route('home') }}#services"><i
                                class="far fa-building fa-fw"></i>{{ __('nav.services') }}</a></li>
                    <li><a href="{{ route('home') }}#contact"><i
                                class="far fa-user fa-fw"></i>{{ __('nav.contact-us') }}</a></li>
                </ul>
                <x-lang-switcher />
            </ul>
            <!-- End Megamenu -->
        </li>
        

    </ul>
    <!-- resources/views/layouts/app.blade.php -->

</div>
