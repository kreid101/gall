<?php

namespace App\Livewire;

use \Illuminate\Http\Request;
use Livewire\Component;

class Test extends Component
{
    public $id;
    public $post;
    public function mount(Request $request)
    {
        $this->post=\App\Models\Post::where('published','=',true)->where('id','=',$request->id)->first();
    }
    public function render()
    {
        return view('livewire.test');
    }
}
