<?php
/**
 * Created by PhpStorm.
 * User: francesco.zorz
 * Date: 13/06/2016
 * Time: 14:16
 */

namespace app\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::select('select * from users');
      #  return view('users');
        return view('users', ['users' => $users]);
    }
}