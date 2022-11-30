<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group-prof', function (Blueprint $table) {
            $table->unsignedBigInteger('prof_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();
            $table->primary(['prof_id','group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group-profs');

    }
}
