<?php

namespace App\Livewire;

use Livewire\Component;

class Student extends Component
{
    public $name,$email,$course;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];
    
    public function saveStudent(){

    }



    public function render()
    {
        return view('livewire.student');
    }
}
