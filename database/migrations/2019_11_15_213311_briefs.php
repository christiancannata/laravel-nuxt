<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Briefs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');


            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');

            $table->datetime('date_from');
            $table->datetime('date_to');

            $table->float('daily_rate_from');
            $table->float('daily_rate_to');

            $table->enum('seniority', ['JUNIOR','MIDDLE','SENIOR']);
            $table->text('description');
            $table->string('address');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');

            $table->boolean('accept_remote');
            $table->boolean('frexible_period');

            $table->string('status');


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
        Schema::drop('briefs');

    }
}
