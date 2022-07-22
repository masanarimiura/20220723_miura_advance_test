<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'full_name' => 'required|max:255',
        'gender' => 'required',
        'email' => 'required|unique:posts|email',
        'postcode' =>  'required', new ZipCodeRule(),
        'address' => 'required|255',
        'building_name' => 'required|255',
        'opinion' => 'required|max:120',
    );
}