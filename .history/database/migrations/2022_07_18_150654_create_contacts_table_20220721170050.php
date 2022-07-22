<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('full_name', 255);
            $table->string('gender',2);
            $table->string('email')->unique('email');
            $table->inte('postcode', 8);
            $table->string('address', 255);
            $table->string('building_name', 255)->nullable();
            $table->string('opinion');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
