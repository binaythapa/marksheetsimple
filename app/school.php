<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //

    protected $fillable = [
    'name',
    'address',
    'code',
    'user_id'
    // 'created_at',
    // 'updated_at'
    ];

    protected $dates = [
    'created_at', 'updated_at'];

public function students()
    {
        $this->hasMany('\App\student::class');
    }


}
