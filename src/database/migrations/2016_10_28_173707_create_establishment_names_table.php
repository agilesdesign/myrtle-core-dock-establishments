<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_names', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('establishmentable_id');
			$table->string('establishmentable_type');
			$table->string('legal');
			$table->json('previous_legal')->nullable();
			$table->string('alternative')->nullable();
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_names');
    }
}
