<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('mrn')->unique();
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('id_number')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('mobile_number_1')->nullable();
            $table->string('mobile_number_2')->nullable();
            $table->string('relative_name')->nullable();
            $table->string('relative_id_number')->nullable();
            $table->string('relationship')->nullable();
            $table->string('relative_address')->nullable();
            $table->string('relative_mobile_number_1')->nullable();
            $table->string('relative_mobile_number_2')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
