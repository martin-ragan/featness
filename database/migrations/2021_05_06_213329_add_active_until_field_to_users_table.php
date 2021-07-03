<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveUntilFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('active_until')->nullable();


            $table->boolean('isAdmin')->default(false);
        });


        \Illuminate\Support\Facades\DB::table('users')->insert([

            [
                'name' => 'admin',
                'surname' => 'admin',
                'height' => 182,
                'weight' => 165,
                'age' => 32,
                'life_style' => "sedavý typ",
                'my_goal' => "chcem chudnúť",
                'daily_calories' => 2000,
                'email' => "admin@admin.com",
                'password' => bcrypt("admin12345"),
                'isAdmin' => true,
                'active_until' => now()->addYear(),
            ],]);
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
        });
    }
}
