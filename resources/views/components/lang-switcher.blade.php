<div class="language-switcher">
    <button class="dropdown-btn">
        @if (session('locale') == 'fr')
           <i class="fa-solid fa-globe"></i> Français
        @elseif(session('locale') == 'es')
        <i class="fa-solid fa-globe"></i> Español
        @elseif(session('locale') == 'ar')
        <i class="fa-solid fa-globe"></i> العربية
        @else
        <i class="fa-solid fa-globe"></i> English
        @endif
    </button>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/lang/en') }}">English</a></li>
        <li><a href="{{ url('/lang/fr') }}">Français</a></li>
        <li><a href="{{ url('/lang/es') }}">Español</a></li>
        <li><a href="{{ url('/lang/ar') }}">العربية</a></li>
    </ul>
</div>