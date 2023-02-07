<?php

namespace App\Http\Livewire\Pages\Document;

use App\Models\Degree;
use Illuminate\http\Request;
use App\Models\Student;
use App\Models\Subject;
use Livewire\Component;

class EnglishDoc extends Component
{
    public  $search, $studentSearch, $student_id, $students, $selected = 0, $name_ar, $degree = [], $selected2 = 0;

    protected $listeners = ['$refresh'];

    public function createardoc()
    {
        $this->validate([
            'student_id' => 'required',
        ]);
        $student_id = $this->student_id;
        $selected = $this->selected;
        if ($selected)
            $selected = 1;
        else
            $selected = 0;
        $selected2 = $this->selected2;
        if ($selected2)
            $selected2 = 1;
        else
            $selected2 = 0;

        return redirect()->route('show-eng-doc', ['student_id' => $student_id, 'selected' => $selected, 'selected2' => $selected2]);
    }
    public function add(Degree $degree)
    {
        $this->validate([
            'degree' => 'required',
        ]);

        foreach ($this->degree as $key => $value) {
            $degree = Degree::create([
                'student_id' => $this->student_id,
                'subject_id' => $key,
                'degree' => $value,
            ]);
        }
    }

    public function render()
    {
        if ($this->search) {
            $search = '%' . $this->search . '%';
            $this->students = Student::where('name_en', 'LIKE', $search)->get();
        }
        if ($this->student_id) {
            $student = Student::find($this->student_id);
            $subjects = Subject::where('department_id', $student->unid->department_id)->get();
        } else
            $subjects = Subject::all();
        return view('livewire.pages.document.english-doc', compact('subjects'));
    }
}
