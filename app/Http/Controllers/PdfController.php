<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Degree;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Http\Request;
class PdfController extends Controller
{ public $student_id;
    public $student;
    public $selected , $selected2 , $gender , $average;
    public function mount($student_id, $selected , $selected2)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->selected = $selected;
        $this->selected2 = $selected2;
    }
    public function index($student_id, $selected , $selected2) 
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->selected = $selected;
        $this->selected2 = $selected2;
        $student = Student::find($this->student_id);
        $average=  $student->degrees->avg('degree');
        // $this->average=  $student->degrees->avg('degree');
        $pdf = PDF::loadView('livewire.pages.document.show-ar-doc', [
            
            'student_id' => $this->student_id,
            'selected' => $this->selected,
            'selected2' => $this->selected2,
            'student' => $this->student,
            'gender'=> $this->gender,
            'title' => 'pdf',
            'description' => 'pdf',
            
        ]);
        return $pdf->download('doc.pdf',compact('average'));
    }
}
