<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section_one_title')->nullable();
            $table->string('section_one_text',1000)->nullable();
            $table->string('section_two_title')->nullable();
            $table->string('section_two_text',1000)->nullable();
            $table->string('section_three_title')->nullable();

            $table->string('section_three_box_one_title')->nullable();
            $table->string('section_three_box_one_text',1000)->nullable();
            $table->string('section_three_box_two_title')->nullable();
            $table->string('section_three_box_two_text',1000)->nullable();
            $table->string('section_three_box_three_title')->nullable();
            $table->string('section_three_box_three_text',1000)->nullable();
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
        Schema::dropIfExists('admin_services');
    }
};
