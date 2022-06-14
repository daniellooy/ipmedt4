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

    public function storeTodo(Request $request){
        error_log("banaan");
        // return $request->id;

        DB::table("bedrijven")->where("id", $request->id)->update(["todo" => 1]);

        return "banaan";

        // $bedrijf = Bedrijf::find($request->id);
        // $bedrijf->todo = 1;
        // $bedrijf->save();
        
    }
}
