<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blood_type extends Model
{
    protected $guarded= ['id' ,'created_at','updated_at'];
    use HasFactory;

}
