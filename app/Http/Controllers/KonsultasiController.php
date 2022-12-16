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
use Illuminate\Support\Facades\Log;

class KonsultasiController extends Controller
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
        $kondisis = Kondisi::all();
        $gejalas = Gejala::all();
        return view('user.konsultasi',compact('kondisis','gejalas'));
    }

    public function hasil_konsultasi(Request $request)
    {
        $users = User::all();
        $array_bobot = array('0', '0.4', '0.6', '0.8', '1');
        $array_gejala = array();
        $kondisis = $request->kondisi;

        for ($i=0; $i <count($kondisis); $i++) {
            $arkondisi = explode("_", $kondisis[$i]);
            if (strlen($kondisis[$i]) > 1) {
                $array_gejala += array($arkondisi[0] => $arkondisi[1]);
            }
        }
        // dd($array_gejala);
        $penyakits = Penyakit::orderBy('id')->get();
        $penyakit_array = $penyakits->toArray();
        foreach ($penyakit_array as $row_penyakit) {
            $nama_penyakit[$row_penyakit['kodepenyakit']] = $row_penyakit['namapenyakit'];
            $solusi_penyakit[$row_penyakit['kodepenyakit']] = $row_penyakit['solusi'];
        }

        $arpenyakit = array();
        $gejalas = Gejala::orderBy('id')->get();

        // PERHITUNGAN CERTAINTY FACTOR
        // dd($penyakits);
        foreach ($penyakits as $rpenyakit){

            $cf = 0;
            $basis = DB::table('pengetahuans')
            ->where('penyakit_id', '=',  $rpenyakit->id)
            ->get();
            $cf_rule = [];
            $c_fold = 0;

            foreach ($basis as $rgejala){
                for ($i = 0; $i <count($kondisis); $i++) {
                    $array_kondisi = explode("_", $kondisis[$i]);
                    $gejala = $array_kondisi[0];
                    if ($rgejala->gejala_id == $gejala) {
                        $cf = ($rgejala->nilai_cf) * ($array_bobot[$array_kondisi[1]-1]);
                        array_push($cf_rule, $cf);
                        $c_fold_arr = [];
                        for ($j = 0; $j < count($cf_rule) - 1; $j++) {
                            $cf1 = $j == 0 ? $cf_rule[$j] : $c_fold;
                            $cf2 = $cf_rule[$j + 1];

                            if (($cf1 >= 0 && $cf2 > 0)) {
                                $cf_combine = $cf1 + $cf2 * (1 - $cf1);

                            } elseif ($cf1 < 0 || $cf2 < 0) {
                                $cf_combine = $cf1 + $cf2 / ((1 - abs($cf1)) + (1 - abs($cf2)));
                            } else {
                                $cf_combine = $cf1 + $cf2 * (1 + $cf1);
                            }
                            $c_fold = $cf_combine;
                            array_push($c_fold_arr, $c_fold);
                        }
                    }
                }
            }
            if ($c_fold > 0) {
                $arpenyakit += array($rpenyakit->kodepenyakit => number_format($c_fold, 5));
                arsort($arpenyakit);

            } elseif ($c_fold == 0) {
                $arpenyakit += array($rpenyakit->kodepenyakit => number_format(0, 0));
            }
        }
        arsort($arpenyakit);
        $input_gejala = serialize($array_gejala);
        $input_penyakit = serialize($arpenyakit);
        // dd($input_gejala, $input_penyakit, $arpenyakit);

        $np1 = 0;
        foreach ($arpenyakit as $key1 => $value1) {
            $np1++;
            $idpkt1[$np1] = $key1;
            $vlpkt1[$np1] = $value1;
        }

        foreach($penyakits as $key => $penyakit) {
            $penyakit->persen = $arpenyakit[$key+1];
        }

        $semua_kondisi_user = [];
        foreach ($array_gejala as $gejala) {
            $get_kondisi = Kondisi::where('id',$gejala)->first();
            if($get_kondisi) {
                array_push($semua_kondisi_user, $get_kondisi->kondisi);
            }
        }
        foreach($gejalas as $key => $gejala) {
            $gejala->kondisi_user = $semua_kondisi_user[$key];
        }


        $simpan = Konsultasi::create([
            'penyakit' => $input_penyakit,
            'gejala' => $input_gejala,
        ]);

        if ($simpan) {
            $get_id_konsultasi  = DB::table('konsultasis')
            ->select('id')
            ->orderBy('id', 'DESC')
            ->limit(1)->get();
            foreach($get_id_konsultasi as $row_id_konsul){
                $id_konsultasi  = $row_id_konsul->id;
            }
            Hasil::create([
                'user_id' => $request['user_id'],
                'konsultasi_id' => $id_konsultasi,
                'penyakit_id' => $idpkt1[1],
                'nilai_akurasi' =>$vlpkt1[1],
            ]);
        }
            // $np = 0;
            // $idpkt = [];
            // $nmpkt =[];
            // $vlpkt = [];
            // foreach ($arpenyakit as $key => $value) {
            //     $np++;
            //     $idpkt[$np] = $key;
            //     $nmpkt[$np] = $nama_penyakit[$key];
            //     $vlpkt[$np] = $value;
            // }

        $hasils = Hasil::latest()->where('user_id', Auth::user()->id)->first();
        // dd($hasil[1]->penyakit->namapenyakit);

        return view('user.hasil', compact('gejalas','penyakits','semua_kondisi_user','users','hasils'));
    }

}
