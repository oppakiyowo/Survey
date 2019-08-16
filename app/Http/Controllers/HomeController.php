<?php

namespace App\Http\Controllers;
use App\Survey;
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
        ->with('jumlah_rt', survey::all()->count())
        ->with('pindah',  survey::all()->sum('pindah'))
        ->with('meninggal',  survey::all()->sum('meninggal'))
        ->with('ganda',  survey::all()->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->sum('penduduk_rt'));

               
    }
}
