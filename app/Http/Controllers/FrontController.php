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

    public function getTrainerDetails($id) {
        $data['trainers'] = DB::table('trainers')->where('id',$id)->first();
        // dd($data);
        // exit();
        return view('trainer-details')->with('trainers',$data);
    }
    
    public function search(Request $request) {
        $search =  $request->get('search');
        $data['trainers'] = DB::table('trainers')->where('nameAr', 'like', '%'.$search. '%')->paginate(5);
        return view('index-rtl',['trainers' => $data]);
    }
}
