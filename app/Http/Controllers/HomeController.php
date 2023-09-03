<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::User()->role_id;
        $id=Auth::User()->id;
        if($role=='2'){
             return $this->edit($id);
        }
        else if($role=='3'){
            return view('customer.dashboard');

        }
    }
    public function edit($id){
        $user = User::find($id);
        return view('tasker.choice_skills',compact('user'));
    }
    public function update(Request $request ,$id){
        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->save();
        return view('tasker.dashboard');
    }
}
