<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_elements', function (Blueprint $table) {
            $table->bigIncrements('ID');

            $table->string('directory_code', 100);
            $table->string('name', 100);
            $table->string('short_name', 100);
            $table->string('additional_field', 100);
            $table->string('code', 100);

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
        Schema::dropIfExists('directory_elements');
    }
}
