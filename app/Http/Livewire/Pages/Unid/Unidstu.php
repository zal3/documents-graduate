<?php

namespace App\Http\Livewire\Pages\Unid;

use App\Models\Unid;
use Livewire\Component;

class Unidstu extends Component
{protected $listeners = [ '$refresh'];
    public $unid_id, $unid, $name_ar, $graduation_year, $round, $department_id, $type;
    public function mount ($id){
        $this->unid_id = $id;
        $this->unid = Unid::findOrFail($id);
        $this->name_ar = $this->unid->name_ar;
        $this->graduation_year = $this->unid->graduation_year;
        $this->round = $this->unid->round;
        $this->department_id = $this->unid->department_id;
        $this->type = $this->unid->type;

    }
    public function render()
    { 
        return view('livewire.pages.unid.unidstu');
    }
}
