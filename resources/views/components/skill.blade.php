@props(['icon','name', 'percentage'])

<div class="skill">
    <h3> <div><i class="fa-brands fa-{{ $icon }}"></i> {{ $name }}</div> <span>{{ $percentage }}</span></h3>
    <div class="the-progress">
        <span style="width: 0%;" data-width="{{ $percentage }}"></span>
    </div>
</div>