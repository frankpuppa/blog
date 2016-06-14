<?php
/**
 * Created by PhpStorm.
 * User: francesco.zorz
 * Date: 13/06/2016
 * Time: 14:16
 */

namespace app\Http\Controllers;


use App\Http\Controllers\Controller;

class TestForm extends Controller
{

    public function index()
    {
        return view('index');
    }
}