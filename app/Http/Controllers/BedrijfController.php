<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BedrijfController extends Controller
{
    public function index(){
        $bedrijven = bedrijf::all();

        return response()->json($bedrijven);
    }
}
