<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    //mass assignment
    protected $fillable = [
    "accountant_id",
    "amount",
    "account",
    "to_account",
    "payment_method",
    "date_created",
    "description"
    ]; 
}
