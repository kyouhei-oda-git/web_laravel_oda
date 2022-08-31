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
            $table->char('employee_id')->comment('社員ID')->change();
            $table->string('family_name')->comment('社員名（性）')->change();
            $table->string('first_name')->comment('社員名（名）')->change();
            $table->integer('section_id')->comment('所属セクション')->change();
            $table->string('mail')->comment('メールアドレス')->change();
            $table->integer('gender_id')->comment('性別')->change();
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
