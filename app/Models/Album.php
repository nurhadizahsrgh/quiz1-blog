<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "album";

    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name', 'album_text', 'album_photos_id'];

    public function photos()
    {
        return $this->belongsTo('App\Models\Photos', 'photos_id');
    }
}
