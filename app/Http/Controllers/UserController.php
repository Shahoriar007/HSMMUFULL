<?php

namespace App\Http\Controllers;

use App\Models\Tutionfee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function changePasswordView(){
        return view('studentChangePassword');
    }


    public function changePasswordform(Request $request){
        $input = $request->all();
        $current_pwd = $input['password'];
        $new_pwd = $input['new-password'];

        
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);
        $user['password'] = Hash::make($new_pwd);
        $user['remember_token'] = Str::random(60);
        $user->save();

        return redirect('dashboard');


    }
}
