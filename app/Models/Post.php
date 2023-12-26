<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'published_at',
        'user_id',      // Foreign key for the User model
        'category_id'  // Foreign key for the Category model
           
        

    ];

    protected $casts=[
        'published_at' =>'datetime',
    ];
    

    use HasFactory;
    use SoftDeletes;



    public function author(){
        return $this->belongsTo(User::class,'user_id');

    }



    public function scopeLatestPublished($query){
        $query->orderBy('published_at', 'desc');
    }

    public function getImage()
    {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : asset(Storage::url($this->image));
    }

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
