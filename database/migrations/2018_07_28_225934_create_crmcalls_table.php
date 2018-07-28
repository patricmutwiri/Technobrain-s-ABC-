<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmcallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crmcalls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('q0')->nullable();
            $table->string('not_reachable')->nullable();
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q2_notclientsnumber')->nullable();
            $table->string('q2_datetime')->nullable();
            $table->string('q3')->nullable();
            $table->string('q3_desposition')->nullable();
            $table->string('q4')->nullable();
            $table->string('q5')->nullable();
            $table->string('q5_others')->nullable();
            $table->string('reachable_desposition')->nullable();
            $table->string('q6')->nullable();
            $table->string('q6_others')->nullable();
            $table->string('q7')->nullable();
            $table->string('q8')->nullable();
            $table->string('q9')->nullable();
            $table->string('q10')->nullable();
            $table->string('q10_datetime')->nullable();
            $table->string('q11_email')->nullable();
            $table->string('q12')->nullable();
            $table->string('q12_details')->nullable();
            $table->string('q13')->nullable();
            $table->string('q13_phone')->nullable();
            $table->string('q13_mail')->nullable();
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
        Schema::dropIfExists('crmcalls');
    }
}
