<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Physician;

class Patient extends Model
{
    use HasFactory;

    public function physician()
    {
        return $this->belongsTo(Physician::class);
    }
}
