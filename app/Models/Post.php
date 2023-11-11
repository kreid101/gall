<?php

namespace App\Models;

use App\Events\PostDeleted;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'published' => 'boolean',
    ];
    protected $with=['images','info'];
    protected $dispatchesEvents = [
        'deleted' => PostDeleted::class,
    ];
    protected static function newFactory():PostFactory
    {
        return PostFactory::new();
    }

    public function images()
    {
        return $this->hasMany(PostImage::class,'post_id','id');
    }
    public function info()
    {
        return $this->hasOne(PostInfo::class,'post_id','id');
    }
    public function seo()
    {
        return $this->hasOne(PostSeo::class,'post_id','id');
    }
}
