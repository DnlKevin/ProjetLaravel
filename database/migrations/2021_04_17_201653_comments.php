<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('author_id');// à  verifier
        $table->bigInteger('recipe_id');// à  verifier
        $table->mediumText('content');
        $table->dateTime('date');
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
