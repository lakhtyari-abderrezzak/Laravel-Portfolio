<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ArticleList extends Component
{
    #[Computed()]

    public function articles() {
        return Article::get();
    }
    public function render()
    {
        return view('livewire.article-list');
    }
}
