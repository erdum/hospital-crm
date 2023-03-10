<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Physician;
use App\Models\Appointment;
use App\Models\Stay;

class Patient extends Model
{
    use HasFactory;

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function stays()
    {
        return $this->hasMany(Stay::class);
    }
}
