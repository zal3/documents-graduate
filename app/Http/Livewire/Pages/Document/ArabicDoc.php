<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;
use Illuminate\http\Request;
use Livewire\Component;

class ArabicDoc extends Component
{
    
    public $search, $studentSearch, $student_id , $students , $cclick = 0, $name_ar ;

    protected $listeners = ['$refresh'];

    public function createardoc()
    {
        $this->validate([
            'student_id' => 'required',
        ]);
            $student_id = $this->student_id; 
            // $cclick = $this->cclick;           
        return redirect()->route('show-ar-doc', $student_id);
      }
      
    public function render()
    {
        if ($this->search) {
            $search = '%' . $this->search . '%';
            $this->students = Student::where('name_ar', 'LIKE', $search)->get();
        }
        return view('livewire.pages.document.arabic-doc');
    }
}
