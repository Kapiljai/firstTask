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
        Schema::table('users', function (Blueprint $table) {
            //

            $table->string('address')->nullable()->after('password');
            $table->string('image')->nullable()->after('password');
            $table->string('city')->nullable()->after('password');
            $table->string('type')->nullable()->after('password');
            $table->string('gender')->nullable()->after('password');
            $table->date('birth')->nullable()->after('password');
            $table->string('state')->nullable()->after('password');
            $table->string('country')->nullable()->after('password');
            $table->string('mobile_no')->nullable()->after('password');
            $table->string('linkedin')->nullable()->after('password');
            $table->string('instagram')->nullable()->after('password');
            $table->string('facebook')->nullable()->after('password');
            $table->string('twitter')->nullable()->after('password');
            $table->string('github')->nullable()->after('password');
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
            //
            $table->dropColumn(['address', 'image', 'city', 'type', 'gender', 'birth', 'state', 'country', 'mobile_no', 'linkedin', 'instagram', 'facebook', 'twitter', 'github']);
        });
    }
};
