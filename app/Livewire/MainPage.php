<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('NUIMG | MAIN')]
class MainPage extends Component
{
    public $pcnt=1;


    public function loadMore()
    {
        $this->pcnt+=1;
    }

    public function render()
    {
        return view('livewire.main-page',[ 'posts' => Post::where('published','=',true)->orderBy('created_at','desc')->paginate($this->pcnt)]);
    }
}
