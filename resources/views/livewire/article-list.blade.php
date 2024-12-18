<div>

    <!-- Start Articles  -->
    <div class="articles" id="articles">
        <h2 class="main-title">Articles</h2>
        <div class="container">
            @foreach ($this->articles as $article)
                <div class="box">
                    <img src="{{ asset($article->image_url) }}" alt="">
                    <div class="content">
                        <h3>{{ $article->title }}</h3>
                        <p>{{ Str::limit($article->description, 100, '...') }}</p>
                    </div>
                    <div class="info">
                        <a wire:navigate href="{{ route('articles.show', $article)}}">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Articles  -->
    <div class="spikes"></div>
</div>