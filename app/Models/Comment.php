<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    protected $fillable = [
        'comment',
        'user_id',      // Foreign key for the User model
        'post_id'  // Foreign key for the Category model
           
        

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    use HasFactory;
}
