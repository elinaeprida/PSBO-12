<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'angkatan',
        'spesialisasi',
        'jabatan',
        'perusahaan',
        'domisili_pekerjaan',
        'domisili_asal',
        'instagram',
        'linkedin',
        'github',
        'avatar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function slider()
    {
        return $this->hasOne(Slider::class);
    }
}
