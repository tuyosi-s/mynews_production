<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    protected $table='persons';

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
