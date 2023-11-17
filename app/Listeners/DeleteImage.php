<?php

namespace App\Listeners;

use App\Events\ImageDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;

class DeleteImage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ImageDeleted $event): void
    {
        Storage::disk('yandexcloud')->delete($event->image->img_path);
        Storage::disk('yandexcloud')->delete($event->image->img_preview);

    }
}
