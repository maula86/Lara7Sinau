<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// add
use DB;
use App\Anggotas;
use App\Buku;
use App\Transaksis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buku = DB::table('bukus')
                    ->select(DB::raw('count(*)'))
                     ->where('sts_buku', '=', 'ADA')
                     ->count();
        $agt = DB::table('anggotas')
                    ->select(DB::raw('count(*)'))
                     ->where('sts_agt', '=', 'AKTIV')
                     ->count();
        $trans = DB::table('transakses')
                    ->select(DB::raw('count(*)'))
                     ->count();
        // return $buku;

        return view('bos.bosmin',compact('buku','agt','trans'));
    }
}
