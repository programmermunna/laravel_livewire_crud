<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $name, $email, $course;
    

    protected function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'email' => ['required', 'email'],
            'course' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent(){
        $validated = $this->validate();
        Student::create($validated);
        session()->flash('message','Student Added Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');
    }

    public function resetInput(){
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }


    public function render()
    {
        $students = Student::orderBy('id','DESC')->paginate(3);
        return view('livewire.student-show',['students'=>$students]);
    }
}
