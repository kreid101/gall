<?php

namespace App\Livewire;

use \Illuminate\Http\Request;
use Livewire\Component;

class Page extends Component
{
    public $id;
    public $post;
    public function mount(Request $request)
    {
        $this->post=\App\Models\Post::with('seo')->where('published','=',true)->where('id','=',$request->id)->first();
    }
    public function render()
    {
        return view('livewire.page')->title($this->post->seo->post_title ?? null);
    }
}
