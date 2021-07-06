<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [''];

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
