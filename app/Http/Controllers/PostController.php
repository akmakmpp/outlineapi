<?php

namespace App\Http\Controllers;

use App\Models\Outline;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
    $outline = new Outline();
     $outline->outline_key = $request->outline_key;
     $outline->exp_date = $request->exp_date;
     $outline->save();

    return response()->json([
        "message" => "success" 
    ]);
    }

    public function delete(Request $request){
        Outline::findorFail($request->id)->delete();
return response()->json([
    "message" => "success" 
]);
    
    }
}
