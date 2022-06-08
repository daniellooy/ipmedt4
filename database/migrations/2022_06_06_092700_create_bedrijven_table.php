<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedrijvenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bedrijven', function (Blueprint $table) {
            $table->integer("id");
            $table->string("category");
            $table->integer("riskindicator");
            $table->string("longitude");
            $table->string("latitude");
            $table->boolean("status");
            $table->boolean("relevant");
            $table->boolean("gepland");
            $table->boolean("todo");
            $table->boolean("plan");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bedrijven');
    }
}
