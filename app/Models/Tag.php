<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Una etiqueta puede estar en múltiples posts.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'tags_id', 'posts_id');
    }
}