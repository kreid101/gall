<?php

namespace App\Listeners;

use App\Events\PostDeleted;
use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class DeletePostImages
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.     */
    public function handle(PostDeleted $event): void
    {

        foreach ($event->post->images as $img)
        {
            Storage::delete('public/'.$img->img_path);
            Storage::delete('public/'.$img->img_preview);
        }
    }
}
