<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = [
        'name', 
        'code',
        'total_penduduk'
    
    ];  

     public function surveys()
        {
            return $this->hasMany(Survey::class);
        }
}
