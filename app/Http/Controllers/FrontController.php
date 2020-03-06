<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Trainer;


class FrontController extends Controller
{
    //
    public function getIndex() {
        $data['trainers'] = DB::table('trainers')->where('isActive', 1)->orderby('id','desc')->take(6)->get();
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

    public function create(Request $request)
    {
        // $input = $request->all();
        // $validator = Validator::make($input, [
        //     'nameAr' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required',

        // ]);

        // if ($validator->fails()) {
        //     # code...
        //     return $this->sendError('error validation', $validator->errors());
        // }
        $trainer = new Trainer();
        $trainer->nameAr = Input::get("nameAr");
        $trainer->phone    = Input::get("phone");
        $trainer->email  = Input::get("email");
        $trainer->save();
  
        // $trainer = Trainer::create($input);
        return redirect()->back();

    }
}
