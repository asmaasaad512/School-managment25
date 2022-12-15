<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyParent extends Model
{
    protected $guarded= ['id' ,'created_at','updated_at'];
    use HasFactory;
    public function Name_Father($lang = null){
        $lang= $lang ?? App::getLocale();   
        return json_decode($this->Name_Father)->$lang;
       }
       public function Name_Mother($lang = null){
        $lang= $lang ?? App::getLocale();   
        return json_decode($this->Name_Mother)->$lang;
       }
}
