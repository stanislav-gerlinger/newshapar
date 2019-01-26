<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('ID');

            $table->string('title', 100);
            $table->string('name', 100);
            $table->text('description');
            $table->text('content');
            $table->bigInteger('parent')->default(0);
            $table->bigInteger('type')->default(0);

            $table->string('page_title', 100)->nullable();
            $table->string('page_description', 100)->nullable();
            $table->string('page_keywords', 100)->nullable();

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
        Schema::dropIfExists('pages');
    }
}
