<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RumahSakit extends Model
{
     use HasFactory;
     
    protected $fillable = ['nama', 'alamat', 'email', 'telepon'];

    public function pasien() : HasMany
    {
        return $this->hasMany(Pasien::class);
    }
}
