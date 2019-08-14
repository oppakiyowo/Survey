<?php

namespace App\Http\Controllers;
use App\Village;
use Illuminate\Http\Request;
use App\Http\Requests\village\CreateVillagesRequest ;
use App\Http\Requests\village\UpdateVillagesRequest ;
class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('village.index')->with('villages',Village::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVillagesRequest $request)
    {
        Village::create([
            'name'=>$request->name,
            'code' => $request->code,
            'total_penduduk' => $request->total_penduduk
        ]);

        session()->flash('success', 'Data kelurahan berhasil di Tambah');
        return redirect(route('villages.index'));
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
    public function update(UpdateVillagesRequest $request, Village $village)
    {
        $village=Village::findOrFail($request->catid);
        $village->update($request->all());
       
        session()->flash('success', 'Data Kelurahan berhasil di ubah');
        return redirect(route('villages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        if ($village->surveys->count() >0)
        {
            session()->flash('error', 'Tidak bisa di hapus, Ada data survey yang menggunakan kelurahan ini');
            return redirect()->back();
        }
        $village->delete();

        session()->flash('success', 'Data Kelurahan Berhasil Di hapus');
        return redirect(route('villages.index'));
    }        
    
}
