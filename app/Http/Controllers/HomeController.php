<?php

namespace App\Http\Controllers;
use App\Survey;
use App\Surveyor;
use App\Village;
use Illuminate\Http\Request;

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
        return view('home')
        ->with('villages', Village::All())
        ->with('jumlah_rt', survey::all()->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->sum('pindah'))
        ->with('meninggal',  survey::all()->sum('meninggal'))
        ->with('ganda',  survey::all()->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->sum('penduduk_rt'));

    }

    public function dompak()
    {
        return view('survey.kelurahan')
        ->with('pindah',survey::all()->where('village_id','=', 13)->sum('pindah'))
        ->with('meninggal',survey::all()->where('village_id','=', 13)->sum('meninggal'))
        ->with('tidak_diketahui',survey::all()->where('village_id','=', 13)->sum('tidak_diketahui'))
        ->with('ganda',survey::all()->where('village_id','=', 13)->sum('ganda'))
        ->with('penduduk_terverifikasi',survey::all()->where('village_id','=', 13)->sum('penduduk_rt'))
        ->with('surveys',Survey::all()
        ->where('village_id','=', 13));
    }

    public function kp_bulang()
    {
        return view('survey.kelurahan')
        ->with('pindah',survey::all()->where('village_id','=', 22)->sum('pindah'))
        ->with('meninggal',survey::all()->where('village_id','=', 22)->sum('meninggal'))
        ->with('tidak_diketahui',survey::all()->where('village_id','=', 22)->sum('tidak_diketahui'))
        ->with('ganda',survey::all()->where('village_id','=', 22)->sum('ganda'))
        ->with('penduduk_terverifikasi',survey::all()->where('village_id','=', 22)->sum('penduduk_rt'))
        ->with('surveys',Survey::all()
        ->where('village_id','=', 22));
    }

    public function batu_ix()
    {
        return view('survey.kelurahan')
        ->with('pindah',survey::all()->where('village_id','=', 1)->sum('pindah'))
        ->with('meninggal',survey::all()->where('village_id','=', 1)->sum('meninggal'))
        ->with('tidak_diketahui',survey::all()->where('village_id','=', 1)->sum('tidak_diketahui'))
        ->with('ganda',survey::all()->where('village_id','=', 1)->sum('ganda'))
        ->with('penduduk_terverifikasi',survey::all()->where('village_id','=', 1)->sum('penduduk_rt'))
        ->with('surveys',Survey::all()
        ->where('village_id','=', 1));
    }




}
