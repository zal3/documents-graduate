<?php

namespace App\Http\Livewire\Pages\Department\Student;

use App\Models\Student;
use Livewire\Component;

class Science extends Component
{
    protected $listeners = ['$refresh', 'search'];

    public $search;
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {
        $students = Student::whereHas('unid', function ($query) {
            $query->where('department_id', 1);
        })->with('unid')->where('name_ar', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.pages.department.student.science', compact('students'));
    }
}
