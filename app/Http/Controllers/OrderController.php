<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        return view('orders');
    }


    public function orderDetail($id){

        return view('orderDetail');
    }

}
