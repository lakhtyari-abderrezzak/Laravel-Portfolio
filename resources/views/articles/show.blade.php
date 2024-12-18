<x-app-layout>
    <div class="events" id="events">
        <h2 class="main-title">Article</h2>
        <div class="container">
            <div class="image">
                <img src="{{ asset($article->image_url) }}" alt="article image">
            </div>
            <div class="info">
                <h2> {{ $article->title }} </h2>
                <p>{{ $article->description }}</p>
            </div>
        </div>
    </div>
</x-app-layout>