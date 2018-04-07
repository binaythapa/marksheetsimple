<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
     protected $fillable = [
    'id',
    'first_name',
    'last_name',
    'DOB',
    'gender',
    'school_ID',
    'fathers_name',
    'mothers_name',
    ];

    protected $dates = [
    'created_at', 'updated_at'];






    // Relationships



   public function school()
    {
        $this->belongsTo('\App\school::class');
    }


   public function marksheet()
    {
        $this->has('\App\marksheet::class');
    }


}
