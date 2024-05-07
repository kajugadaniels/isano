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
            $table->string('name');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('id_number');
            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village');
            $table->string('mobile_number');
            $table->string('relative_name');
            $table->string('relative_id_number');
            $table->string('relationship');
            $table->string('relative_province');
            $table->string('relative_district');
            $table->string('relative_sector');
            $table->string('relative_cell');
            $table->string('relative_village');
            $table->string('relative_mobile_number');
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
