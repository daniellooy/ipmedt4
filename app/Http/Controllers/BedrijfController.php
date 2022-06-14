<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bedrijf;
use DB;

class BedrijfController extends Controller
{
    public function index(){
        $bedrijven = Bedrijf::all();

        return response()->json($bedrijven);
    }

    public function storeTodo(Request $request){

        DB::table("bedrijven")->where("id", $request->id)->update(["todo" => 1]);

        // return "banaan";

    }

    public function storeToplan(Request $request){

        DB::table("bedrijven")->where("id", $request->id)->update(["plan" => 1]);
        DB::table("bedrijven")->where("id", $request->id)->update(["todo" => 0]);

        // return "banaan";

    }
}
