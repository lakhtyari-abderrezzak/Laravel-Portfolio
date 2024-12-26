<x-app-layout>

    {{-- landing page --}}
    <x-partials.landing />
    {{-- About section --}}
    <x-partials.about />
    {{-- Projects Section  --}}
    <section id="projects" class="projects">
        <h2 class="main-title">{{ __('projects.title' )}}</h2>
        <x-partials.projects />
    </section>
    {{-- Skills  --}}
    <x-partials.skills />
    {{-- Caroussel  --}}
    <x-caroussel />
    {{-- Start Services --}}
    <div class="services" id="services">
        <h2 class="main-title">{{ __('global.services.title') }}</h2>
        <x-partials.services />
    </div>
    {{-- Statistics  --}}
    <div class="stats" id="stats">
        <h1 class="main-title">{{ __('global.stats.title') }}</h1>
        <x-partials.stats />
    </div>
    {{-- contact section  --}}
    <x-partials.contact />
    <div class="spikes"></div>
    {{-- Testemonials --}}
    <livewire:testemonial-box />




</x-app-layout>
