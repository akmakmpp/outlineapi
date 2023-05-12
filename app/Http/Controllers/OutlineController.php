<?php

namespace App\Http\Controllers;

use App\Models\Outline;
use Illuminate\Http\Request;

class OutlineController extends Controller
{
    public function index(){

        return Outline::all();
    }
}
