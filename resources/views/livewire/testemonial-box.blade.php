<!-- Start testimonials -->
<div class="testemonials" id="testemonials">
    <h2 class="main-title">testimonials</h2>
    <div class="container">
        @foreach ($testemonials as $testemony)
            <div class="box">
                <img src="{{ asset('images/avatar-01.png') }}" alt="testemony image">
                <h3>{{ $testemony->name }}</h3>
                <span>{{ $testemony->phone }}</span>
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
<!-- End testimonials -->
