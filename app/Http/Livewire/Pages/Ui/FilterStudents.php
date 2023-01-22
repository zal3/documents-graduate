<?php

namespace App\Http\Livewire\Pages\Ui;

use Livewire\Component;

class FilterStudents extends Component
{
    public $type ,$round , $gender , $department_id , $graduation_year;
    public function render()
    {
        $this->emit('filterStudents', $this->type ,$this->round , $this->gender , $this->department_id , $this->graduation_year);

        return view('livewire.pages.ui.filter-students');
    }
}
