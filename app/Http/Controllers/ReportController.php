<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Sell;
use App\Employee;
use App\Product;

class ReportController extends Controller
{
    public function index(){

    	$sells = Sell::all()->where('status', '1');
        return view('gudang.report.pengambilan', ['sells'=>$sells]);
    }
}
