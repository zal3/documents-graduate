<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Livewire\Component;
use App\Models\Subject;

class Science extends Component
{    protected $listeners = ['$refresh', 'filterProjects'];
    public   $stage , $course , $name_ar , $name_en , $unit;

    public function filterProjects($stage , $course )
    {
        $this->stage = $stage;
        $this->course = $course;
        
    }
    public function add()
    {
        $this->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'unit' => 'required',
        ]);
        Subject::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'department_id' => 1,
            'stage' => $this->stage,
            'unit' => $this->unit,
            'course' => $this->course,
        ]);
        $this->name_ar = '';
        $this->name_en = '';
        $this->unit = '';
        // $this->emit('refresh');
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
