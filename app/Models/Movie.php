<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = 'movie_id';
    use HasFactory;
    public function quote()
    {
        return $this->hasMany(Quote::class);
    }
}
