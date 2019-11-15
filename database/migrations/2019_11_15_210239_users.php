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
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->enum('role', ['USER', 'COMPANY', 'ADMIN'])->default('USER');
            $table->string('website')->nullable();
            $table->string('linkedin_account')->nullable();
            $table->string('twitter_account')->nullable();
            $table->string('avatar')->nullable();
            $table->text('short_bio')->nullable();
            $table->float('daily_rate_from')->nullable();
            $table->string('daily_rate_to')->nullable();
            $table->boolean('is_available')->default(true);
            $table->boolean('remote_work')->default(false);
            $table->dateTime('deleted_at')->nullable();
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
