<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepage';
    protected $fillable = [
      'slider_title',
      'slider_text',
      'slider_video_url',
      'section_two_title',
      'section_two_text',
      'section_two_a_title',
      'section_two_a_text',
      'section_three_part_one_text',
      'section_three_part_one_title',
      'section_three_part_two_title',
      'section_three_part_two_text',
      'section_four_title',
      'section_four_text',
      'section_four_faq_one_title',
      'section_four_faq_one_text',
      'section_four_faq_two_text',
      'section_four_faq_two_title',
      'section_four_faq_three_text',
      'section_four_faq_three_title',
      'section_seven_title',
      'section_seven_text',
      'section_two_box_one_title',
      'section_two_box_one_text',
      'section_two_box_two_title',
      'section_two_box_two_text',
      'section_two_box_three_title',
      'section_two_box_three_text',
      'section_two_box_four_title',
      'section_two_box_four_text',
      'section_two_box_five_title',
      'section_two_box_five_text',
      // Other attributes that are allowed for mass assignment
    ];
}
