<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_bank extends Model
{
    use HasFactory;

    protected $fillable =['Member_id','Member_name','Blood_Group','Contact_Number','Address'];
}
