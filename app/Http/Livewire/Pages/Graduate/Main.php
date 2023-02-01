<?php

namespace App\Http\Livewire\Pages\Graduate;

use App\Models\{Student, Unid};
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search', 'filterStudents'];
    public $search, $type, $round, $gender, $department_id, $graduation_year, $name_ar;
    public function search($search)
    {
        $this->search = $search;
    }
    public function filterStudents($type, $round, $gender, $department_id, $graduation_year)
    {
        $this->type = $type;
        $this->round = $round;
        $this->gender = $gender;
        $this->department_id = $department_id;
        $this->graduation_year = $graduation_year;
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        $students = Student::with('unid')->where('name_ar', 'like', $search)->orderBy('id', 'desc')->get();
        return view('livewire.pages.graduate.main', compact('students'));
    }
}
