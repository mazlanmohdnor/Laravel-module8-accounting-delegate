<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    //mass assignment
    protected $fillable = [
    "account",
    "accountant_id",
    "expense_category",
    "payment_method",
    "amount",
    "date_created",
    "payee",
    "description"
    ]; 
}
