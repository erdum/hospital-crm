<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Physician;
use App\Models\Patient;
use App\Models\Medication;

class Prescribes extends Model
{
    use HasFactory;

    public function physician()
    {
        return $this->belongsTo(Physician::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medication()
    {
        return $this->belongsTo(Medication::class);
    }
}
