<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Physician;
use App\Models\Room;
use App\Models\Prescribes;

class Appointment extends Model
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

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function prescribes()
    {
        return $this->hasMany(Prescribes::class);
    }
}
