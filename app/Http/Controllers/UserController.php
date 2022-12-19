<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(Patient::find(1)->physician);
    }
}
