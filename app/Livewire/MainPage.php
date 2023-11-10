<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Create Post')]
class MainPage extends Component
{
    public $pcnt=2;
    public function loadMore()
    {
        $this->pcnt+=1;
    }

    public function render()
    {
        return view('livewire.main-page',[ 'posts' => Post::orderBy('created_at','desc')->paginate($this->pcnt),]);
    }
}
