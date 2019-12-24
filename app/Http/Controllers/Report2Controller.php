<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Purchase;
use App\Product;

class Report2Controller extends Controller{

    public function index(){

    	$purchases = Purchase::all()->where('status', '1');
        return view('gudang.report2.index', ['purchases'=>$purchases]);
    }
}
