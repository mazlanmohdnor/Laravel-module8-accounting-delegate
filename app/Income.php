<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //mass assignment
    protected $fillable = [
    "account",
    "income_category",
    "payment_method",
    "amount",
    "date_created",
    "payer",
    "description"
    ]; 
}






