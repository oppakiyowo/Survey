<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surveyor;
use App\Survey;
use App\Http\Requests\surveyor\CreateSurveyorsRequest ;
use App\Http\Requests\surveyor\UpdateSurveyorsRequest ;

class SurveyorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('surveyor.index')->with('surveyors',Surveyor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('errors.404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSurveyorsRequest  $request)
    {

        Surveyor::create([
            'name'=>$request->name,
            'kontak' => $request->kontak
        ]);

        session()->flash('success', 'Data Surveyors berhasil di Tambah');
        return redirect(route('surveyors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $surveyor =Surveyor::find($id);
        return view('surveyor.individu')
        ->with('surveyor', $surveyor)

        // ->with('jumlah_rt', survey::where('tanggal_survey', '>=' , date('2019-07-19'))->count())
        ->with('pindah',  survey::all()->where('surveyor_id','=',$id )->sum('pindah'))
        ->with('meninggal',  survey::all()->where('surveyor_id','=',$id )->sum('meninggal'))
        ->with('ganda',  survey::all()->where('surveyor_id','=',$id )->sum('ganda'))
        ->with('tidak_diketahui',  survey::all()->where('surveyor_id','=',$id )->sum('tidak_diketahui'))
        ->with('penduduk_asli',  survey::all()->where('surveyor_id','=',$id )->sum('penduduk_rt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurveyorsRequest $request, Surveyor $surveyor)
    {
        $surveyor=Surveyor::findOrFail($request->catid);
        $surveyor->update($request->all());

        session()->flash('success', 'Data surveyor berhasil di ubah');
        return redirect(route('surveyors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surveyor $surveyor)
    {
        if ($surveyor->surveys->count() >0)
        {
            session()->flash('error', 'Tidak bisa di hapus, Ada Data survey yang menggunakan surveyor ini');
            return redirect()->back();
        }
        $surveyor->delete();

        session()->flash('success', 'Data Surveyor Berhasil Di hapus');
        return redirect(route('surveyors.index'));
    }

}
