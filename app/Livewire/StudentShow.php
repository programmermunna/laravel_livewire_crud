<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $email, $course, $student_id;
    

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

    public function updateStudent(){
        $validated = $this->validate();
        Student::where('id',$this->student_id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'course' => $validated['course'],
        ]);
        session()->flash('message','Student Update Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');
    }

    public function edit_student(int $student_id){
        $student = Student::find($student_id);
        if($student){
            $this->student_id = $student->id;
            $this->name = $student->name;
            $this->email = $student->email;
            $this->course = $student->course;
        }else{
            return redirect()->to('/students');
        }
    }

    public function closeModal(){
        $this->resetInput();
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
