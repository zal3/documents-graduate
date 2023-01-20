<?php

namespace App\Http\Livewire\Pages\Department\Student;
use App\Models\Student;
use Livewire\Component;

class Information extends Component
{
    public function render()
    {
        $students = Student::with('department')->where('department_id' , 2)->get();
        return view('livewire.pages.department.student.information', compact('students'));
    }
}
