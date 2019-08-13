<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{
    protected $fillable = [
        'name', 
        'kontak'
    
    ];  

    public function surveys()
        {
            return $this->hasMany(Survey::class);
        }
}
