<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $data = array(
            'name' => 'sefa',
            'surname' => 'Yalçındağ',
            'age' => '24'
        );

        return view('home', $data);
    }
}
