<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    public function filter()
    {
        $movieId=36;
        $quotes = Quote::whereHas('movie', function ($query) use ($movieId) {
            $query->where('id', $movieId);
        })->get();
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
