<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = [
      'section_one_title',
      'section_one_text',
      'section_two_title',
      'section_two_text',
      'section_two_faq_one_title',
      'section_two_faq_one_text',
      'section_two_faq_two_title',
      'section_two_faq_two_text',
      'section_two_faq_three_title',
      'section_two_faq_three_text',
      'section_three_video_url',
      'section_four_title',
      'section_four_text',
      'section_four_box_one_title',
      'section_four_box_one_text',
      'section_four_box_two_title',
      'section_four_box_two_text',
      'section_four_box_three_title',
      'section_four_box_three_text',
      'section_four_box_four_title',
      'section_four_box_four_text',
      
      'section_two_box_one_title',
      'section_two_box_one_text',
      'section_two_box_two_title',
      'section_two_box_two_text',
      'section_two_box_three_title',
      'section_two_box_three_text',
      // Other attributes that are allowed for mass assignment
    ];
}
