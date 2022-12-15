<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    protected $guarded= ['id' ,'created_at','updated_at'];
    public function name($lang = null){
        $lang=$lang ?? App::getLocale();
    
        return json_decode($this->name)->$lang;
       }
       public function notes($lang = null){
        $lang=$lang ?? App::getLocale();
    
        return json_decode($this->notes)->$lang;
       }
      public function classrooms(){
       return $this->hasMany(Classroom::class); 
      }
}
