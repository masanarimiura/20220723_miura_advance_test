<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'full_name' => 'required|max:255',
        'gender' => 'required',
        'email' => 'required|unique:contacts|email',
        'postcode' => 'required|max:8',
        'address' => 'required|max:255',
        'building_name' => 'max:255',
        'opinion' => 'required|max:120',
    );

}
