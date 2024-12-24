<x-app-layout>

    {{-- landing page --}}
    <x-partials.landing />
    <x-partials.about />
    <div class="spikes"></div>
    <!-- Start Services  -->
    <div class="services" id="services">
        <h2 class="main-title">Services</h2>
        <x-partials.services />
    </div>
    <!-- End Services  -->
    <x-partials.skills />
    <x-caroussel />
    <div class="stats" id="stats">
        <div class="main-title">Stats</div>
        <x-partials.stats />
    </div>
    {{-- Testemonials --}}
    <livewire:testemonial-box />
    {{-- contact section  --}}
    <x-partials.contact />


</x-app-layout>
