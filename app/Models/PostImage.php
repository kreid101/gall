<?php

namespace App\Models;

use Database\Factories\ImagePostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;
    protected static function newFactory(): ImagePostFactory
    {
        return ImagePostFactory::new();
    }
    protected $guarded=[];
}
