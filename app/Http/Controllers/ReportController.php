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
    public function index(Request $request){

        if(isset($_GET['cari'])){
            // dd('disini');
            $tgl_awal = $request->tgl_awal;
            $tgl_akhir = $request->tgl_akhir;

            $sells = Sell::orderBy('id_sell', 'DESC')
            ->where('status', '1')
            ->whereBetween('created_at', array($tgl_awal, $tgl_akhir))
            ->get();

            if(empty($tgl_awal) || empty($tgl_akhir)){
                // dd('disini');
                return back()->with('pesan', 'Masukkan tanggal!');
            }

            return view('gudang.report.pengambilan', ['sells'=>$sells]);

        }

        if(isset($_GET['reset'])){
            // dd('disini');
            $sells = Sell::orderBy('id_sell', 'DESC')->where('status', '1')->get();
            return view('gudang.report.pengambilan', ['sells'=>$sells]);

        }

        $sells = Sell::orderBy('id_sell', 'DESC')->where('status', '1')->get();
        return view('gudang.report.pengambilan', ['sells'=>$sells]);
    }



    public function destroy(Request $request)
    {
      	$sells = Sell::find($request->id_sell);
    	$sells->delete();
    	return back()->with('pesan', 'Data berhasil dihapus');
    }
}
