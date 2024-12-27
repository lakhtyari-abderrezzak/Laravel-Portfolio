    <!-- Start Discount -->
    <div class="contact" id="contact">
        <div class="image">
            <div class="content">
                <h2>{{ __('global.contact.title-side') }}</h2>
                <p>{{ __('global.contact.description') }}</p>
                <img  src="{{ asset('images/contact.png')}}" alt="contact" />
            </div>
        </div>
        {{-- Conatct Form  --}}
        <livewire:contact-form />
    </div>
    <!-- End Discount -->
