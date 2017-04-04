<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_governments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('establishmentable_id');
			$table->string('establishmentable_type');
			$table->integer('ein')->nullable()->default(null);
			$table->integer('tin')->nullable()->default(null);
			$table->integer('duns')->nullable()->default(null);
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
        Schema::dropIfExists('establishment_governments');
    }
}
