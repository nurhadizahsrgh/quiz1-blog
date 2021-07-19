<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $table = "photos";

    protected $primaryKey = 'photos_id';
    protected $fillable = ['photos_date', 'photos_title', 'photos_text', 'photos_post_id'];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
