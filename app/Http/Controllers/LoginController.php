<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Logins;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect('news.index');
        }else{
            return view('admin.login');
        }
    }

    public function actionLogin(Request $request){
        $data= [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect(route('login'));
        }else{
            Session::flash('error', 'Email or Password were wrong');
            return redirect(route('action.login'));
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }


    // public function store(Request $request){
    //     $dataAuth = $request->validate([
    //      'username' => 'username',
    //      'password'=> 'password'
    //      // 'image'=>'required'
    //     ]);
    
    //     $newDataProfile = Logins::create($dataAuth);
    //     return redirect(route('admin.login'));
    //     }

    
}
?>