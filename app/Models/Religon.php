<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Religon extends Model
{
    protected $guarded= ['id' ,'created_at','updated_at'];
    use HasFactory;
    public function name($lang = null){
        $lang= $lang ?? App::getLocale();   
        return json_decode($this->name)->$lang;
       }
}
