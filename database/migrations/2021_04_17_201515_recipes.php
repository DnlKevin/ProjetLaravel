<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('recipes', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('author_id');
        $table->mediumText('title');
        $table->longText('content');
        $table->longText('ingredients');
        $table->string('url');
        $table->text('tags');
        $table->dateTime('date');
        $table->string('status');
    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
