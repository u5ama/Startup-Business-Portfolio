<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetOffersForm extends Model
{
    protected $table = 'get_offers';
    protected $fillable = [
      'name',
      'email',
      'agency_name',
      'offer',
      'service_name',
    ];
}
