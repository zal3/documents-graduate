<?php

namespace App\Http\Livewire\Pages\Ui;

use Livewire\Component;

class FilterUnids extends Component
{
    public $type ,$round  , $department_id , $graduation_year;

    public function render()
    {
        $this->emit('filterUnids', $this->type ,$this->round  , $this->department_id , $this->graduation_year);
        return view('livewire.pages.ui.filter-unids');
    }
}
