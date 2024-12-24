@props(['name', 'img'])

<div class="box">
    <img 
    src="{{ asset("images/services/$img")}}" alt="">
    <h3>{{ $name }}</h3>
    <div class="info">
    
    </div>
</div>
