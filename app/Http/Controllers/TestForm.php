<?php
/**
 * Created by PhpStorm.
 * User: francesco.zorz
 * Date: 13/06/2016
 * Time: 14:16
 */

namespace app\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestForm extends Controller
{

    public function index(Request $request)
    {
        $mail=$request->email;
        return view('welcome', ['email'=>$mail]);
        //return view('users', ['users' => $users]);
    }
}