<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    //
    protected $fillable =
    [
    	 	'id',
            'code',
            'name',
            'type',
            'full_marks',
            'pass_marks',
            'obtained_marks'


    ];

      protected $dates = [
    'created_at', 'updated_at'];







    // RELATIONSHIPS

    public function marksheet()
    {
        $this->belongsToMany('\App\marksheet::class');
    }
}

