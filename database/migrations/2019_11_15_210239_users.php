<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('country');
            $table->enum('role', ['USER', 'COMPANY', 'ADMIN'])->default('USER');
            $table->string('website');
            $table->string('linkedin_account');
            $table->string('twitter_account');
            $table->string('avatar');
            $table->text('short_bio');
            $table->float('daily_rate_from');
            $table->string('daily_rate_to');
            $table->boolean('is_available');
            $table->boolean('remote_work');
            $table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'last_name',
                'city',
                'country',
                'role',
                'website',
                'linkedin_account',
                'twitter_account',
                'avatar',
                'short_bio',
                'daily_rate_from',
                'daily_rate_to',
                'is_available',
                'remote_work',
                'deleted_at'
            ]);
        });
    }
}
