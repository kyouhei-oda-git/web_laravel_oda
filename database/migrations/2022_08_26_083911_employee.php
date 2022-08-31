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
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false)->comment('ID');
            $table->char('employee_id',10)->nullable(false)->unique()->comment('社員ID');
            $table->string('family_name',20)->nullable(false)->comment('社員名（性）');
            $table->string('first_name',20)->nullable(false)->comment('社員名（名）');
            $table->integer('section_id')->length(1)->nullable(false)->comment('所属セクション');
            $table->string('mail',256)->nullable(false)->comment('メールアドレス');
            $table->integer('gender_id')->length(1)->nullable(false)->comment('性別');
        });
        DB::statement("COMMENT ON TABLE employee IS '社員'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
