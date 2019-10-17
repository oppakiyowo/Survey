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

    public function rekap_batu_ix()
    {
        return view('rekap.batu_ix')
        ->with('jumlah_rt', survey::all()->where('village_id','=', 1)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=', 1)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=', 1)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=', 1)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=', 1)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=', 1)->sum('penduduk_rt'));
    }

    public function rekap_air_raja()
    {
        return view('rekap.air_raja')
        ->with('jumlah_rt', survey::all()->where('village_id','=',23)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',23)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',23)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',23)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',23)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',23)->sum('penduduk_rt'));
    }

    public function rekap_bukit_cermin()
    {
        return view('rekap.bukit_cermin')
        ->with('jumlah_rt', survey::all()->where('village_id','=',17)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',17)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',17)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',17)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',17)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',17)->sum('penduduk_rt'));
    }

    public function rekap_kamboja()
    {
        return view('rekap.kamboja')
        ->with('jumlah_rt', survey::all()->where('village_id','=',19)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',19)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',19)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',19)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',19)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',19)->sum('penduduk_rt'));
    }

    public function rekap_kampung_baru()
    {
        return view('rekap.kampung_baru')
        ->with('jumlah_rt', survey::all()->where('village_id','=',18)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',18)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',18)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',18)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',18)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',18)->sum('penduduk_rt'));
    }

    public function rekap_kampung_bugis()
    {
        return view('rekap.kampung_bugis')
        ->with('jumlah_rt', survey::all()->where('village_id','=',25)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',25)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',25)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',25)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',25)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',25)->sum('penduduk_rt'));
    }

    public function rekap_kampung_bulang()
    {
        return view('rekap.kampung_bulang')
        ->with('jumlah_rt', survey::all()->where('village_id','=',22)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',22)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',22)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',22)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',22)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',22)->sum('penduduk_rt'));
    }

    public function rekap_melayu_kota_piring()
    {
        return view('rekap.melayu_kota_piring')
        ->with('jumlah_rt', survey::all()->where('village_id','=',21)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',21)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',21)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',21)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',21)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',21)->sum('penduduk_rt'));
    }

    public function rekap_penyengat()
    {
        return view('rekap.penyengat')
        ->with('jumlah_rt', survey::all()->where('village_id','=',27)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',27)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',27)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',27)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',27)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',27)->sum('penduduk_rt'));
    }

    public function rekap_pinang_kencana()
    {
        return view('rekap.pinang_kencana')
        ->with('jumlah_rt', survey::all()->where('village_id','=',11)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',11)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',11)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',11)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',11)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',11)->sum('penduduk_rt'));
    }

    public function rekap_sei_jang()
    {
        return view('rekap.sei_jang')
        ->with('jumlah_rt', survey::all()->where('village_id','=',15)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',15)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',15)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',15)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',15)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',15)->sum('penduduk_rt'));
    }

    public function rekap_senggarang()
    {
        return view('rekap.senggarang')
        ->with('jumlah_rt', survey::all()->where('village_id','=',26)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',26)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',26)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',26)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',26)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',26)->sum('penduduk_rt'));
    }

    public function rekap_tanjung_ayun_sakti()
    {
        return view('rekap.tanjung_ayun_sakti')
        ->with('jumlah_rt', survey::all()->where('village_id','=',14)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',14)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',14)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',14)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',14)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',14)->sum('penduduk_rt'));
    }

    public function rekap_tanjung_pinang_barat()
    {
        return view('rekap.tanjung_pinang_barat')
        ->with('jumlah_rt', survey::all()->where('village_id','=',20)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',20)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',20)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',20)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',20)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',20)->sum('penduduk_rt'));
    }

    public function rekap_tanjung_pinang_kota()
    {
        return view('rekap.tanjung_pinang_kota')
        ->with('jumlah_rt', survey::all()->where('village_id','=',24)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',24)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',24)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',24)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',24)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',24)->sum('penduduk_rt'));
    }

    public function rekap_tanjung_pinang_timur()
    {
        return view('rekap.tanjung_pinang_timur')
        ->with('jumlah_rt', survey::all()->where('village_id','=',12)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',12)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',12)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',12)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',12)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',12)->sum('penduduk_rt'));
    }

    public function rekap_tanjung_unggat()
    {
        return view('rekap.tanjung_unggat')
        ->with('jumlah_rt', survey::all()->where('village_id','=',16)->count())
        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('village_id','=',16)->sum('pindah'))
        ->with('meninggal',  survey::all()->where('village_id','=',16)->sum('meninggal'))
        ->with('ganda',  survey::all()->where('village_id','=',16)->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('village_id','=',16)->sum('tidak_diketahui'))
        ->with('penduduk_terverifikasi',  survey::all()->where('village_id','=',16)->sum('penduduk_rt'));
    }


}
