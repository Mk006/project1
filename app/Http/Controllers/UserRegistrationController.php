<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Hash;
use App\registration;



class UserRegistrationController extends Controller
{
    public function index()
    {
        return view('userRegistration');
    }
    public function submit(request $user)
    {
            $registrations = new registration;
            $registrations -> uid = $user -> input('uid');
            $registrations -> name = $user -> input('name');
            $registrations -> email = $user -> input('email');
            $registrations -> birthdate = $user -> input('birthdate');
            $registrations -> pswrd = Hash::make($user['pswrd']);
            $registrations -> remember_token = $user -> input('remember_token');

            $registrations -> save();
            return redirect('/userregistration')->with('response','Register Successfully....Wellcome To CDIP!');
    }
}

?>
