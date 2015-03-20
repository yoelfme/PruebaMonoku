<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('sectors', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('code')->default('');
            $table->string('description');

            $table->timestamps();
        });

        Schema::create('units', function(Blueprint $table){
            $table->increments('id');

            $table->string('description');
            $table->timestamps();
        });

        Schema::create('sources', function(Blueprint $table){
            $table->increments('id');

            $table->string('description');
        });

        Schema::create('projects',function(Blueprint $table){
            $table->increments('id');

            $table->string('prog',6);
            $table->string('subp',6);
            $table->string('proy',6);
            $table->string('subp2',6);
            $table->integer('rec');
            $table->string('sit',2);

            $table->text('description');
            $table->string('year',5);

            $table->decimal('appropriation_initial',18);
            $table->decimal('appropriation_in_force',18);
            $table->decimal('liabilities',18);
            $table->decimal('liabilities2',18);
            $table->decimal('payments',18);

            $table->integer('id_source')->unsigned();
            $table->foreign('id_source')->references('id')->on('sources');

            $table->integer('id_sector')->unsigned();
            $table->foreign('id_sector')->references('id')->on('sectors');

            $table->integer('id_unit')->unsigned();
            $table->foreign('id_unit')->references('id')->on('units');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');

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
		Schema::drop('projects');
        Schema::drop('sources');
        Schema::drop('units');
        Schema::drop('sectors');
	}

}
