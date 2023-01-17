<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class ShowArDoc extends Component
{
    public $student_id;
    public $student;
    public function mount($student_id)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
    }
    public function render()
    {

        return view('livewire.pages.document.show-ar-doc');
    }
}
