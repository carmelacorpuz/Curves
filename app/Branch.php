<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location', 'registration_date', 'license_number', 'branch_owner', 'contact_number', 'email_address', 'facebook_link', 'photo',
    ];
}
