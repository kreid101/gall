<?php

namespace App\Listeners;

use App\Events\PostDeleted;
use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeletePostImages
{
    /**
     * Create the event listener.
     */
    public function __construct(
        public Post $post
    )
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostDeleted $event): void
    {
        //
    }
}
