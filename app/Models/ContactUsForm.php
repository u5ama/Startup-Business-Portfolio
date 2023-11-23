<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsForm extends Model
{
    protected $table = 'contact_forms_record';
    protected $fillable = [
      'name',
      'email',
      'service_name',
      'message',
    ];
}
