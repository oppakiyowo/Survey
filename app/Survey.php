<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

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
   
}
