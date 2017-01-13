<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $fillable = [
    "firstname",
    "lastname",
    "email",
    "role",
    "worksroom",
    "invited_by"
    ];
}
