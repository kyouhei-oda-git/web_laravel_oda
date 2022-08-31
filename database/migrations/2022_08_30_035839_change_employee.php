<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->char('employee_id',10)->change();
            $table->string('family_name',20)->change();
            $table->string('first_name',20)->change();
            $table->integer('section_id')->length(1)->change();
            $table->string('mail',256)->change();
            $table->integer('gender_id')->length(1)->change();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            //
        });
    }
};
