<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id', 'author', 'email', 'content'
    ];
    
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
