<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lembaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat'
    ];

    public function penghuni()
    {
        return $this->hasMany(penghuni::class, 'lembaga_id');
    }
}
