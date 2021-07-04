<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';
    protected $fillable = ['name','gender','email','phone','twitter','facebook','identity_number','bank_name','bank_account','address','instagram','linkedin'];
}
