<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class LikeDislike extends Model
{
    protected $table = 'like_dislikes';
    protected $guarded = [''];

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
}
