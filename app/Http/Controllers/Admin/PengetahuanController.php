<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengetahuan;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengetahuans = DB::table('pengetahuans')
        ->join('penyakits', 'penyakits.id', '=', 'pengetahuans.penyakit_id')
        ->join('gejalas', 'gejalas.id', '=', 'pengetahuans.gejala_id')
        ->select('penyakits.namapenyakit', 'gejalas.namagejala', 'pengetahuans.nilai_cf', 'pengetahuans.id')
        ->paginate(5);

        return view('admin.pengetahuan.show',compact('pengetahuans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengetahuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gejala_id' => 'required',
            'penyakit_id' => 'required',
            'nilai_cf' => 'required',
        ]);

        Pengetahuan::create($request->all());

        return redirect()->route('pengetahuan.index')
                        ->with('success','Pengetahuan created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengetahuan $pengetahuan)
    {
        return view('admin.pengetahuan.edit',compact('pengetahuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengetahuan $pengetahuan)
    {
        $request->validate([
            'gejala_id' => 'required',
            'penyakit_id' => 'required',
            'nilai_cf' => 'required',
        ]);

        $pengetahuan->update($request->all());

        return redirect()->route('pengetahuan.index')
                        ->with('success','Pengetahuan updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengetahuan $pengetahuan)
    {
        $pengetahuan->delete();

        return redirect()->route('pengetahuan.index')
                        ->with('success','Pengetahuan deleted successfully');
    }
}
