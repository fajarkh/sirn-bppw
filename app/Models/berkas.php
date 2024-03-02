<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berkas extends Model
{
    use HasFactory;

    public function wasdal()
    {
        return $this->hasMany(wasdal::class, 'wasdal_id');
    }
}
