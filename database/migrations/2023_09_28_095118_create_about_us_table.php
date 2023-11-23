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
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('section_one_title')->nullable();
            $table->string('section_one_text',1000)->nullable();

            $table->string('section_two_title')->nullable();

            $table->string('section_two_faq_one_title')->nullable();
            $table->string('section_two_faq_one_text')->nullable();

            $table->string('section_two_faq_two_title')->nullable();
            $table->string('section_two_faq_two_text')->nullable();

            $table->string('section_two_faq_three_title')->nullable();
            $table->string('section_two_faq_three_text')->nullable();

            $table->string('section_three_video_url')->nullable();

            $table->string('section_four_title')->nullable();
            $table->string('section_four_text')->nullable();

            $table->string('section_four_box_one_title')->nullable();
            $table->string('section_four_box_one_text')->nullable();
            $table->string('section_four_box_two_title')->nullable();
            $table->string('section_four_box_two_text')->nullable();
            $table->string('section_four_box_three_title')->nullable();
            $table->string('section_four_box_three_text')->nullable();
            $table->string('section_four_box_four_title')->nullable();
            $table->string('section_four_box_four_text')->nullable();

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
        Schema::dropIfExists('about_us');
    }
};
