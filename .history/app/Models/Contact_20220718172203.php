<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'full_name' => 'required|max:255',
        'gender' => 'required|max:255',
        'email' => '|unique:posts|email',
        'postcode' => 'required|8',
        'address' => 'required|255',
        'building_name' => 'required|255',
        '' => 'required'
        '' => 'required'
        '' => 'required'
        '' => 'required'
        '' => 'required'
    );
}


$table->bigIncrements('id')->unsigned();
            $table->string('full_name', 255);
            $table->tinyInteger('gender');
            $table->string('email')->unique('email');
            $table->string('postcode', 8);
            $table->string('address', 255);
            $table->string('building_name', 255)->nullable();
            $table->string('opinion');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();