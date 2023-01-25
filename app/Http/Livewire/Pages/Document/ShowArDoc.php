<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class ShowArDoc extends Component
{
    public $student_id;
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
        $student = Student::find($this->student_id);
        $average=  $student->degrees->avg('degree');
        return view('livewire.pages.document.show-ar-doc', compact('average'));
    }
}
