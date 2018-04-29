<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'keytag_id','age','nickname','first_name', 'middle_initial', 'last_name','birthdate', 'address','marital_status','landline','occupation', 'email_address', 'mobile_number', 'timestamp',
    ];
}
