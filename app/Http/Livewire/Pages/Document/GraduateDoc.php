<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;

use Livewire\Component;

class GraduateDoc extends Component
{public $search, $studentSearch, $student_id , $students , $selected , $name_ar ;
    public function createardoc()
    {
        $this->validate([
            'student_id' => 'required',
        ]);
            $student_id = $this->student_id; 
            $selected = $this->selected;
            if($selected)
                 $selected= 1;
                        else
                    $selected= 0; 
                //  dd($selected);     
        return redirect()->route('show-grad', ['student_id' => $student_id, 'selected' => $selected]);
      }
    public function render()
    {if ($this->search) {
        $search = '%' . $this->search . '%';
        $this->students = Student::where('name_ar', 'LIKE', $search)->get();
    }
        return view('livewire.pages.document.graduate-doc');
    }
}
