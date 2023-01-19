<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Livewire\Component;
use App\Models\Subject;

class Science extends Component
{    protected $listeners = ['$refresh', 'filterProjects'];
    public   $stage , $course   ;

    public function filterProjects($stage , $course )
    {
        $this->stage = $stage;
        $this->course = $course;
        
    }
    public function render()
    {
        if($this->stage && $this->course){
            $subjects = Subject::where('department_id', 1)->where('stage', $this->stage)->where('course', $this->course)->get();
        }
        else{
            $subjects = [];
        }
        return view('livewire.pages.department.subject.science', compact('subjects'));
    }
}
