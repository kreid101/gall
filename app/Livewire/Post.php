<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;
    public $images=[];

    public function setImages()
    {
        $this->images=$this->post->images;
    }

    public function render()
    {
        return view('livewire.post',['post'=>$this->post]);
    }
}
