<?php

namespace App\Models;

use App\Events\ImageDeleted;
use App\Events\PostDeleted;
use Database\Factories\ImagePostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;
    protected $dispatchesEvents = [
        'deleted' => ImageDeleted::class,
    ];
    protected static function newFactory(): ImagePostFactory
    {
        return ImagePostFactory::new();
    }
    protected $guarded=[];
}
