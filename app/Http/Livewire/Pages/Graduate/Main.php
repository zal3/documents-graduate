<?php

namespace App\Http\Livewire\Pages\Graduate;
use App\Models\Student;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search', 'filterProjects'];
    public $search ;
    public function search($search)
    {
        $this->search = $search;
    }    public function render()
    {
        $students = Student::with('department')->where('name_ar', 'LIKE', '%'.$this->search.'%')->get();
        return view('livewire.pages.graduate.main', compact('students'));
    }
}
