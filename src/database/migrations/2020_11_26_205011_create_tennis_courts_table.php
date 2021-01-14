<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTennisCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tennis_courts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->enum('free_access', ['free', 'partial', 'paid'])->default('free');
            $table->tinyInteger('num_of_courts')->default(1);
            $table->enum('disabled_access', ['none', 'partial', 'full'])->default('none');
            $table->decimal('long', 11, 8)->default(53.712960);
            $table->decimal('lat', 11, 8)->default(-1.897762);
            $table->foreignId('court_surface_id');
            $table->timestampsTz(0);
            $table->softDeletesTz('deleted_at', null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tennis_courts');
    }
}
