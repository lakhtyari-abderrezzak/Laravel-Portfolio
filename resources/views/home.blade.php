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
    <div class="spikes"></div>
    <!-- End Services  -->
    {{-- Testemonials --}}
    <x-partials.skills />
    <x-caroussel />

    <div class="spikes"></div>
    <livewire:testemonial-box />
    {{-- contact section  --}}
    <x-partials.contact />


</x-app-layout>
