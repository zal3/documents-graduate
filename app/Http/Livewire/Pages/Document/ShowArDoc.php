<?php

namespace App\Http\Livewire\Pages\Document;

use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;

class ShowArDoc extends Component
{
    public $student_id;
    public $student;
    public $selected, $selected2, $average;
    public function mount($student_id, $selected, $selected2)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->selected = $selected;
        $this->selected2 = $selected2;
    }
    public function render()
    {
        $student = Student::find($this->student_id);
        $this->average =  $student->degrees->avg('degree');
        return view('livewire.pages.document.show-ar-doc');
    }
}
