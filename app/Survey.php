<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Survey extends Model
{

    protected $dates = [
        'tanggal_survey'
        
    ];

    protected $fillable = [
        'user_id',
        'tanggal_survey', 
        'surveyor_id', 
        'village_id', 
        'pindah', 
        'meninggal',
        'tidak_diketahui',
        'ganda',
        'rt',
        'rw',
        'penduduk_rt',
    ];

    public function Surveyor()
    {
        return $this->belongsTo(Surveyor::class);
    } 

    public function Village()
    {
        return $this->belongsTo(Village::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class); 
    } 
   
    public function TanggalSurveyLabel ()
    {
        if( ! $this->tanggal_survey){
            return '<button class="btn btn-warning btn-sm" disabled="disabled">Proses</button>';
        }
        elseif ($this->tanggal_survey && $this->tanggal_survey->isFuture()){
            return '<button class="btn btn-info btn-sm" disabled="disabled">Schedule </button>';
        }
        else{
            return '<button class="btn btn-success btn-sm" disabled="disabled">Selesai </button>';
        }
    }
}
