<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sales_controller extends Controller
{
    function onInsert(Request $req){
    
        return view('add_admin');
    }    
function add(Request $request){

 $request ->validate([
'name'=>'required',
'address'=>'required',
'email'=>'required',
'passwrod'=>'required',


        ]);


$query = DB::table ('sales_and_marketin_pserson')->insert([


'Name'=>$request ->input('name'),
'address'=>$request ->input('address'),
'email'=>$request ->input('email'),
'password'=>$request ->input('passwrod'),



]);
if ($query){
   return back()->with('success','data has been inserted Successfully');     
}

else{
        return back()->with('filed');        
}
}
}
