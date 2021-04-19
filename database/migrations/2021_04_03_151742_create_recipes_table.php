<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('recipes', function (Blueprint $table) {
    $table->bigInteger('id');
    $table->bigInteger('author_id');
    $table->mediumtext('title');
    $table->longtext('content');
    $table->longtext('ingredients');
    $table->char('url');
    $table->text('tags');
    $table->datetime('date');
    $table->char('status');
});

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('recipes');
    }
}
