<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kondisi;
use App\Models\Gejala;
use App\Models\Konsultasi;
use App\Models\Pengetahuan;
use App\Models\Penyakit;
use App\Models\User;
use App\Models\Hasil;
use \Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
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

        $hasils = Hasil::where('user_id', Auth::user()->id)->paginate(5);;
        // dd($hasils[0]->penyakit->namapenyakit);
        return view('user.riwayat', compact('hasils'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

}
