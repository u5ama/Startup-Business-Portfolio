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
        Schema::create('homepage', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('slider_title')->nullable();
            $table->string('slider_text',1000)->nullable();
            $table->string('slider_video_url')->nullable();
            $table->string('slider_image')->nullable();

            $table->string('section_two_title')->nullable();
            $table->string('section_two_text',1000)->nullable();
            $table->string('section_two_name')->nullable();
            $table->string('section_two_image_one')->nullable();
            $table->string('section_two_image_two')->nullable();

            $table->string('section_three_part_one_title')->nullable();
            $table->string('section_three_part_one_text',1000)->nullable();

            $table->string('section_three_part_two_title')->nullable();
            $table->string('section_three_part_two_text',1000)->nullable();

            $table->string('section_four_title')->nullable();
            $table->string('section_four_text',1000)->nullable();

            $table->string('section_four_faq_one_title')->nullable();
            $table->string('section_four_faq_one_text')->nullable();
            $table->string('section_four_faq_two_title')->nullable();
            $table->string('section_four_faq_two_text',1000)->nullable();
            $table->string('section_four_faq_three_title')->nullable();
            $table->string('section_four_faq_three_text',1000)->nullable();

            $table->string('section_five_title')->nullable();
            $table->string('section_five_image')->nullable();

            $table->string('section_seven_title')->nullable();
            $table->string('section_seven_text',1000)->nullable();
            $table->string('section_seven_image')->nullable();

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
        Schema::dropIfExists('homepage');
    }
};
