<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class FilterProjects extends Component
{
     public $course = null , $stage = null ;
    public function render()
    {
        $this->emit('filterProjects', $this->course , $this->stage );
        return view('livewire.ui.filter-projects');
    }
}
