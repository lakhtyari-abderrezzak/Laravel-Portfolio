<!-- Start testimonials -->
@if (!empty($this->testemonials))
<div class="testemonials" id="testemonials">
    <h2 class="main-title"> {{ __('global.testemonials.title') }} </h2>
    <div class="container">
        @foreach ($this->testemonials as $testemony)
            <div class="box">
                <img src="{{ asset('images/avatar-01.png') }}" alt="testemony image">
                <h3>{{ $testemony->name }}</h3>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class=" far fa-star"></i>
                </div>
                <p>{{ $testemony->message }}</p>
            </div>
        @endforeach
    </div>
</div>
@endif
<!-- End testimonials -->
