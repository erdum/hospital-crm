<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Physician;
use App\Models\Nurse;
use App\Models\Stay;
use App\Models\Department;

class Procedure extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function physician()
    {
        return $this->belongsTo(Physician::class);
    }

    public function nurse()
    {
        return $this->belongsTo(Nurse::class);
    }

    public function stay()
    {
        return $this->belongsTo(Stay::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
