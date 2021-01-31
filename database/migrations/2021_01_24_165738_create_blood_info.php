<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_info', function (Blueprint $table) {
          
            $table->string('Member_id')->unique();
            $table->string('Member_name');
            $table->string('Blood_Group');
            $table->string('Contact_Number');
            $table->string('Address');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_info');
    }
}
