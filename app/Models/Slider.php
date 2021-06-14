<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alumni_id',
    ];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
