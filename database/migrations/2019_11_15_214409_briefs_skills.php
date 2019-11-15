<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BriefsSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs_skills', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('brief_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();

            $table->foreign('brief_id')
                ->references('id')
                ->on('briefs')
                ->onDelete('cascade');


            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
                ->onDelete('cascade');

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
        Schema::drop('briefs_skills');

    }
}
