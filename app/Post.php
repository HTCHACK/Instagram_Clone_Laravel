<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\User;
use App\LikeDislike;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [''];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function likes(){
        return $this->hasMany(LikeDislike::class,'post_id');
    }
}
