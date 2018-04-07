<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marksheet extends Model
{
    //

protected $fillable = [
     		// 'English',
       //        'Nepali',
       //        'Mathematics',
       //        'Science',
       //        'SocialStudies',
       //        'EPH',
       //        'OptionalI',
       //        'OptionalII',
              'total',
             'percentage',
             'result'

             ];

protected $dates = [
    'created_at', 'updated_at',];
}



public function student()
    {
    	$this->belongsTo('\App\student::class');
    }





}
