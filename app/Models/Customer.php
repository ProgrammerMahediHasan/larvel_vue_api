<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
// app/Models/Customer.php
protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
];

}
