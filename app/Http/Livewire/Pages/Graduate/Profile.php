<?php

namespace App\Http\Livewire\Pages\Graduate;
use App\Models\Student;
use Livewire\Component;

class Profile extends Component
{
    public $student_id , $student , $name_ar , $name_en , $gender , $graduation_year , $average , $round , $image_path , $department_id , $type , $average_written;
    public function mount ($id){
        $this->student_id = $id;
        $this->student = Student::findOrFail($id);
        $this->name_ar = $this->student->name_ar;
        $this->name_en = $this->student->name_en;
        $this->gender = $this->student->gender;
        $this->graduation_year = $this->student->graduation_year;
        $this->average = $this->student->average;
        $this->round = $this->student->round;
        $this->image_path = $this->student->image_path;
        $this->department_id = $this->student->department_id;
        $this->type = $this->student->type;
        $this->average_written = $this->student->average_written;
        
    }
    public function render()
    {
        return view('livewire.pages.graduate.profile');
    }
}
