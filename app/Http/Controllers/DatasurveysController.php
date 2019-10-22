<?php

namespace App\Http\Controllers;
use App\Datasurveys;
use Illuminate\Http\Request;
use App\Http\Requests\datasurveys\CreateDataSurveysRequest;
use App\Http\Requests\datasurveys\UpdateDataSurveysRequest;

class DatasurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('data-surveys.index')->with('datasurveys',Datasurveys::all());
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
    public function store(CreateDataSurveysRequest  $request)
    {
        $image =$request->image->store('posts');

        Datasurveys::create([
            'total_anomali'=>$request->total_anomali,
            'total_terverifikasi' => $request->total_terverifikasi,
            'tanggal_penyerahan' => $request->tanggal_penyerahan,
            'image' => $image,
        ]);

        session()->flash('success', 'Data Surveyors berhasil di Tambah');
        return redirect(route('datasurveys.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datasurveys $datasurvey)
    {



        $datasurvey->delete();

        session()->flash('success', 'Data penyerahan Berhasil Di hapus');
        return redirect(route('datasurveys.index'));
    }
}
