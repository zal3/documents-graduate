<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;

use Livewire\Component;

class ShowMast extends Component
{public $student_id;
    public $student;
    public $selected ;
    public function mount($student_id, $selected)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->selected = $selected;
    }
    public function render()
    {
        return view('livewire.pages.document.show-mast');
    }
}
