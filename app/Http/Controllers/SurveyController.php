<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Surveyor;
use App\Village;

use App\Http\Requests\survey\CreateSurveyRequest ;
use App\Http\Requests\survey\UpdateSurveyRequest ;
class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.index')->with('surveys',Survey::all());
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('survey.create')
       ->with('villages',Village::all())
       ->with('surveyors',Surveyor::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSurveyRequest $request)
    {
        $survey = Survey::create([

            'user_id' => auth()->user()->id,
            'tanggal_survey' => $request->tanggal_survey,
            'surveyor_id' => $request->surveyor,
            'village_id' => $request->village,
            'pindah'  => $request ->pindah,
            'meninggal'=> $request ->meninggal,
            'tidak_diketahui' => $request ->tidak_diketahui,
            'ganda' => $request ->ganda,
            'rt' => $request ->rt, 
            'rw' => $request ->rw,
            'penduduk_rt' =>$request ->penduduk_rt,
  
        ]);  
    
       session()->flash('success', 'Data Survey berhasil di tambahkan');
       return redirect(route('surveys.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $survey =Survey::where('id', $id)->firstorFail();

        return view('survey.edit')
        ->with('survey',$survey)
        ->with('villages',Village::all())
        ->with('surveyors',Surveyor::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurveyRequest $request, Survey $survey)
    {
        $data=$request->only(
            [
          
            'village',
            'surveyor',
            'rt',
            'pindah',
            'ganda',
            'meninggal',
            'tidak_diketahui',
            'rw',
            'penduduk_rt',
            'tanggal_survey',
            'village_id'=> $request->village,
            'surveyor_id' => $request->surveyor,


            ]);
                
            $survey->update($data);
            session()->flash('success', 'Data survey berhasil di ubah');

            return redirect(route('surveys.index'))
            ->with('villages',Village::all())
            ->with('surveyors',Surveyor::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();

        session()->flash('success', 'Data Survey Berhasil Di hapus');
        return redirect(route('surveys.index'));
    }
}
