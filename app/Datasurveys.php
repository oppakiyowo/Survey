<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datasurveys extends Model
{
    public $table = 'datasurveys';

    protected $fillable = [
        'total_anomali',
        'total_terverifikasi',
        'tanggal_penyerahan',
        'image',


    ];

    // delete post image in storage
    public function deleteImage()
    {
        Storage::delete($this->image);
    }

}
