<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{

  function login(){

    return view('login');
  }

    function onSelect(Request $request){
      $jsonData= DB::select('select * from login');
        $jsonString= json_encode($jsonData);
        $selectData=json_decode($jsonString);
       return view('select',['selectKey'=>$selectData]);
      

       $id=selectkey[id];
       $pass=selectkey[password];
       $id=selectkey[usertype];
      $user = User::where('username', $request->uname);
      $password = User::where('username', $request->password);     

            if($id=user && $password=$pass){
              
              return view('/admin_profile');
          }else{
              $req->session()->flash('msg', 'invaild username or password');
              return redirect('/login');
          }

     }
}
