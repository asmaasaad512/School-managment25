<?php

namespace App\Http\Livewire;

use App\Models\Blood_type;
use App\Models\Nationality;
use App\Models\Religon;
use Livewire\Component;

class AddParent extends Component
{
    public $currentStep = 1,

    // Father_INPUTS
    $Email, $Password,
    $Name_Father, $Name_Father_en,
    $National_ID_Father, $Passport_ID_Father,
    $Phone_Father, $Job_Father, $Job_Father_en,
    $Nationality_Father_id, $Blood_Type_Father_id,
    $Address_Father, $Religion_Father_id,
    
    // Mother_INPUTS
    $Name_Mother, $Name_Mother_en,
    $National_ID_Mother, $Passport_ID_Mother,
    $Phone_Mother, $Job_Mother, $Job_Mother_en,
    $Nationality_Mother_id, $Blood_Type_Mother_id,
    $Address_Mother, $Religion_Mother_id;
     
    public function updated($propertyName)
    {
        
        $this->validateOnly($propertyName,[

            'Email'=>'required|email',
        ])
    
;
        
    }
 
    public function render()
    {
    return view('livewire.add-parent', [
        'Nationalities' => Nationality::all(),
        'Type_Bloods' =>Blood_type::all(),
        'Religions' => Religon::all(),
    ]);
    
    }
    
    //firstStepSubmit
    public function firstStepSubmit()
    {
    $this->currentStep = 2;
    }
    
    //secondStepSubmit
    public function secondStepSubmit()
    {
    $this->currentStep = 3;
    }
    
    
    //back
    public function back($step)
    {
    $this->currentStep = $step;
    }
}
