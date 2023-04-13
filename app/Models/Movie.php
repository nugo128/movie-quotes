<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title'];
    protected $fillable = [
        'title'
    ];
    public function quote()
    {
        return $this->hasMany(Quote::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCurrentUserAttribute()
    {
        return Auth::user();
    }
}
