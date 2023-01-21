<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Livewire\Component;
use App\Models\Subject;
class Information extends Component
{protected $listeners = ['$refresh', 'filterProjects','search'];
    public   $stage , $course   ;
    public $search ;
    public function search($search)
    {
        $this->search = $search;
    }  
    public function filterProjects($stage , $course )
    {
        $this->stage = $stage;
        $this->course = $course;
        
    }
    public function render()
    {if($this->stage && $this->course){
        $subjects = Subject::where('department_id', 2)->where('stage', $this->stage)
        ->where('course', $this->course)->where('name_ar', 'LIKE', '%'.$this->search.'%')->get();
    }
    else{
        $subjects = [];
    }
        return view('livewire.pages.department.subject.information', compact('subjects'));
    }
}
