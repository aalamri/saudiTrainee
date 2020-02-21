<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function getIndex() {
        $data['trainers'] = DB::table('trainers')->orderby('id','desc')->take(6)->get();
        return view('index-rtl', $data);
    }
}
