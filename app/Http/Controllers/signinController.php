<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Hash;

class signinController extends Controller
{
    public function index(request $data)
    {
    	$email = $data->input('email');
    	$password =$data->input('pswrd');



    	$user = DB::table('registrations')->where('email', [$email])->first();

        if($user)
        {
            $hashpassword = $user->pswrd;
        }

        if($user)
        {
            if (Hash::check($password, $hashpassword))
            {
                session()->put('data', $user->name);
                session()->put('data1', $user->uid);

                return redirect('/');
            }
            else
                return redirect('/signin')->with('response','Password not match');
        }
        else
                return redirect('/signin')->with('response','Email not match');
    	

    }

    public function signout(request $data)
    {
    	session()->forget('data');
    	session()->forget('data1');
    	return redirect('/');
    }
}
