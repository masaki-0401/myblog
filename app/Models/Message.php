<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'body'
    ];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    public function getImageUrlAttribute()
    {
        if ($this->attributes['image']) {
            return asset('storage/' . $this->attributes['image']);
        }
        return null;
    }
}
