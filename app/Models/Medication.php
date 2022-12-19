<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prescribes;

class Medication extends Model
{
    use HasFactory;

    public function prescribes()
    {
        return $this->belongsTo(Prescribes::class);
    }
}
