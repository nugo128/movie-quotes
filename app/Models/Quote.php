<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
    use HasFactory;
    use HasTranslations;


    public $translatable = ['quote'];
    protected $fillable = [
        'quote'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
