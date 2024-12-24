
  <div class="container">
      <x-application-logo/>
      <ul class="main-nav">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{ route('home') }}#about">About</a></li>
          <li><a href="{{ route('home') }}#projects">Projects</a></li>
          <li><a href="{{ route('home') }}#our-skills">Skills</a></li>
          <li class="other-links">
              <a>Other Links</a>
          <!-- Start Megamenu -->
          <ul class="mega-menu">
              <div class="image">
                  <img src="{{asset('images/megamenu.png')}}" alt="">
              </div>
              <ul class="links">
                  <li><a href="{{ route('home') }}#testemonials"><i class="far fa-comments fa-fw"></i>Testemonials</a></li>
                  <li><a href="{{ route('home') }}#stats"><i class="far fa-chart-bar fa-fw"></i>Stats</a></li>
                  <li><a href="{{ route('articles.index')}}"><i class="fa-regular fa-newspaper"></i>Articles</a></li>
                  <li><a href="{{route('home')}}#services"><i class="far fa-building fa-fw"></i>Services</a></li>
                  <li><a href="{{ route('home') }}#contact"><i class="far fa-user fa-fw"></i>Contact us</a></li>
                </ul> 
              </ul>
          <!-- End Megamenu -->
          </li>
      </ul>
  </div>
