<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentBiographsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_biographs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('establishmentable_id');
			$table->string('establishmentable_type');
			$table->integer('establishment_type_id')->nullable()->default(null);
			$table->string('established_at')->nullable()->default(null);
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
        Schema::dropIfExists('establishment_biographs');
    }
}
