<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    protected $fillable = [
      'section_one_title',
      'section_one_text',
      'section_two_title',
      'section_two_text',
      'section_three_title',
      'section_three_text',
      'section_three_number',
      'section_four_title',
      'section_four_text',
      // Other attributes that are allowed for mass assignment
    ];
}
