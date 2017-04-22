<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('zip_code')->default('');
            $table->integer('price')->default(0);
            $table->integer('score')->default(0);
            $table->integer('annual')->default(0);
            $table->integer('debts')->default(0);
            $table->integer('property_type')->default(0);
            $table->integer('home_used')->default(0);
            $table->integer('first_buyer')->default(0);
            $table->integer('new_construction')->default(0);
            $table->string('desired_loan')->default('');
            $table->boolean('is_military')->default(0);
            $table->boolean('is_bankruptcy')->default(0);
            $table->boolean('is_foreclosure')->default(0);
            $table->boolean('is_employeed')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_data', function(Blueprint $table) {
            $table->dropForeign('user_data_user_id_foreign');
        });
        Schema::dropIfExists('user_data');
    }
}
