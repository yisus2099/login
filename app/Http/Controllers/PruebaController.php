<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PruebaController extends Controller
{
    //



    public function hola()
    {

        return view('hola')
            ->with('title', 'Hola')
            ->with('autor', 'Jesús Alejandro Torres Ramírez 5E');
    }

    public function log()
    {

        return view('admon.login')
            ->with('title', 'Login')
            ->with('autor', 'Jesús Alejandro Torres Ramírez 5E');
    }

    public function validarLogin(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'yisus2099' && $pass === '12345') {
            $url = 'admon.dashboard';
        } else {
            $url = 'admon.login';
        }
        return view($url)
            ->with('title', 'Login')
            ->with('autor', 'Jesús Alejandro Torres Ramírez 5E');
    }
}
