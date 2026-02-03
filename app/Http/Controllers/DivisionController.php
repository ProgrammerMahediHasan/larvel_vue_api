<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index(){
        $divisions= Division::all();
        return response()->json(compact ('divisions'));
    }
}
