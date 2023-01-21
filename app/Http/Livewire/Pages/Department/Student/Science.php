<?php

namespace App\Http\Livewire\Pages\Department\Student;
use App\Models\Student;
use Livewire\Component;

class Science extends Component
{
    public function render()
    {
        $students = Student::with('department')->where('department_id' , 1)->get();
        return view('livewire.pages.department.student.science', compact('students'));
    }
}
