<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "post";

    protected $primaryKey = 'post_id';
    protected $fillable = ['post_date', 'post_slug', 'post_title', 'post_text', 'post_cat_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
}
