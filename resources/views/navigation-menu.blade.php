    <!-- navbar starts -->
    <nav
      id="navbar-top"
      class="navbar navbar-expand-lg navbar-light bg-white sticky-top"
    >
      <div class="container-fluid px-5">
        <a class="navbar-brand fw-bold fs-2" href="#" style="color: #3f396d"
          ><x-application-logo /></a
        >
        <button
          class="nav-menu d-md-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <i class="bi bi-menu-button-fill"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav gap-4" style="font-size: 1.1rem">
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('About') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Services') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Portfolio') }}
                </x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Testemonials') }}
                </x-nav-link>            
            </li>
            <li class="nav-item">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Blog') }}
                </x-nav-link>            
            </li>
          </ul>
        </div>
        <button class="c-btn ms-4 py-2 px-4 rounded-pill d-none d-md-block">Contact</button>
      </div>
    </nav>
    <!-- navbar ends here -->