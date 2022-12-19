<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Physician;

class Department extends Model
{
    use HasFactory;

    public function head()
    {
        return $this->belongsTo(Physician::class, 'head_id');
    }
}
