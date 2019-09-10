<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Surveyor;
use App\Village;
class RekapController extends Controller
{
    public function rekap_dompak()
    {
        return view('rekap.dompak')
        ->with('jumlah_rt', survey::all()->where('village_id','=', 13)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=', 13)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=', 13)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=', 13)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=', 13)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=', 13)->sum('penduduk_rt'));
    }
}
