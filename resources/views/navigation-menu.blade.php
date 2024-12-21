
  <div class="container">
      <x-application-logo/>
      <ul class="main-nav">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{ route('home') }}#contact">Contact</a></li>
          <li><a href="{{ route('home') }}#our-skills">Skills</a></li>
          <li class="other-links">
              <a>Other Links</a>
          <!-- Start Megamenu -->
          <ul class="mega-menu">
              <div class="image">
                  <img src="{{asset('images/megamenu.png')}}" alt="">
              </div>
              <ul class="links">
                  <li><a href="#testemonials"><i class="far fa-comments fa-fw"></i>Testemonials</a></li>
                  <li><a href="{{ route('articles.index')}}"><i class="fa-regular fa-newspaper"></i>Articles</a></li>
                  <li><a href="#team members"><i class="far fa-user fa-fw"></i>Team Members</a></li>
                  <li><a href="#services"><i class="far fa-building fa-fw"></i>Services</a></li>
                  <li><a href="#work-steps"><i class="far fa-clipboard fa-fw"></i>How Tt Works</a></li>
              </ul> 
              <ul class="links">
                  <li><a href="#events"><i class="far fa-calendar-alt fa-fw"></i>Events</a></li>
                  <li><a href="#pricing-plan"><i class="fa regular fa-server"></i>Pricing Plans</a></li>
                  <li><a href="#videos"><i class="far fa-play-circle fa-fw"></i>Top Videos</a></li>
                  <li><a href="#stats"><i class="far fa-chart-bar fa-fw"></i>Stats</a></li>
                  <li><a href="#discount"><i class="far fa-percent fa-fw"></i>Request A Discount</a></li>
              </ul>
              </ul>
          <!-- End Megamenu -->
          </li>
      </ul>
  </div>
