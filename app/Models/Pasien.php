<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'telepon', 'rumah_sakit_id'];

    public function rumahSakit() : BelongsTo
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
