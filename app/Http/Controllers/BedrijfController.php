<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bedrijf;

class BedrijfController extends Controller
{
    public function index(){
        $bedrijven = Bedrijf::all();

        return response()->json($bedrijven);
    }
}
