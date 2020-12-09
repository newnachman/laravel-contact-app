<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{    
    public function up() 
    {   // Create a table with the following requests:
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // automaticly sets as AI + PRIMARY + (BIG)INT.
            $table->string('name', 30); // equivalent to VARCHAR length 30.
            $table->string('phone', 15);
            $table->string('title', 10);
            $table->string('avatar', 50);
            $table->timestamps(); // equivalent to CREATED-AT & UPDATED-AT.
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
