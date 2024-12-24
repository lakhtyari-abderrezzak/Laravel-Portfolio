<x-app-layout>

    {{-- landing page --}}
    <x-partials.landing />
    <x-partials.about />
    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2 class="main-title">My Projects</h2>
        <x-partials.projects />

    </section>
    <!-- Start Services  -->
    <div class="services" id="services">
        <h2 class="main-title">Services</h2>
        <x-partials.services />
    </div>
    <!-- End Services  -->
    <x-partials.skills />
    <x-caroussel />
    <div class="stats" id="stats">
        <h1 class="main-title">Stats</h1>
        <x-partials.stats />
    </div>
    {{-- Testemonials --}}
    <livewire:testemonial-box />
    {{-- contact section  --}}
    <x-partials.contact />




</x-app-layout>
