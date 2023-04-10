<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'title'
    ];
    public function quote()
    {
        return $this->hasMany(Quote::class);
    }
}
