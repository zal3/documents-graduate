<?php

namespace App\Http\Livewire\Pages\Ui;

use App\Models\Degree;
use App\Models\Student;
use App\Models\Subject;
use Livewire\Component;

class Doctable extends Component
{
    public $student_id , $degree=[];
    public function render()
    {
        if($this->student_id)
        {
            $student = Student::find($this->student_id);
            $subjects = Subject::where('department_id', $student->unid->department_id)->get();
        }
        else
            $subjects = Subject::all();
            $this->degree = Degree::where('student_id', $student->id)->get();
        return view('livewire.pages.ui.doctable', compact('subjects'));
    }
}
