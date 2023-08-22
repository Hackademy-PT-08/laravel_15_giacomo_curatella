<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class LikesCounter extends Component
{
    public $like;
    public $article;


    public function mount($article){
        $this->like = $article->likes;
        $this->article = $article->id;
    }

    public function render()
    {
        return view('livewire.likes-counter', ['likes'=>$this->like]);
    }

    public function increment(){
        $this->like ++;
        $article = Article::find($this->article);
        $article->likes = $this->like;
        $article->save();
    }
}
