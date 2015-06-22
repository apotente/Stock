<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->mediumText('bio')->nullable();
            $table->string('twitter')->nullable();
            $table->string('web')->nullable();
            $table->date('birthday')->nullable();

            $table->integer('user_id')->unsigned();

            $table->foreign('used_id')
                ->references('id')
                ->on('users')
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
		Schema::drop('user_profiles');
	}

}
