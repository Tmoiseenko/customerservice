<?php

namespace Tmoiseenko\CustomerService;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['hash', 'user_id'];
}
