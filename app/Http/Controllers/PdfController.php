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
    public $selected , $selected2 , $gender ;
    
    public function gg($student_id, $selected , $selected2){
        $student_id = $student_id;
        $student = Student::findOrFail($student_id);
        $selected = $selected;
        $selected2 = $selected2;
        
        return view('pdf\pdf_view' , compact('student_id','selected','selected2','student') );
    }

    public function index($student_id, $selected, $selected2) 
    { 
        $student_id = $student_id;
        $student = Student::findOrFail($student_id);
        $selected = $selected;
        $selected2 = $selected2; 
        $pdf = PDF::loadView('pdf\pdf_view', [
            
            'student_id' => $student_id,
            'selected' => $selected,
            'selected2' => $selected2,
            'student' => $student,
            'gender'=> $this->gender,
            'title' => 'pdf',
            'description' => 'pdf',
            
        ]);
        return $pdf->download('doc.pdf');
    }
}
