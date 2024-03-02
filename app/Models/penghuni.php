<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    use HasFactory;

    protected $fillable = [
        'lembaga_id',
        'status',
        'nama',
        'alamat'
    ];

    public function lembaga()
    {
        return $this->belongsTo(lembaga::class, 'lembaga_id');
    }

    public function penghuni()
    {
        return $this->hasMany(penghuni::class, 'penghuni_id');
    }
}
