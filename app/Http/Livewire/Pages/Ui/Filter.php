<?php

namespace App\Http\Livewire\Pages\Ui;

use Livewire\Component;

class Filter extends Component
{public $course = null , $stage = null ;
    public function render()
    {
        $this->emit('filterProjects', $this->course , $this->stage );
        return view('livewire.pages.ui.filter');
    }
}
