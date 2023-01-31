<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Illuminate\Http\Request;
class PdfController extends Controller
{ public $student_id;
    public $student;
    public $selected , $selected2;
    public function mount($student_id, $selected , $selected2)
    {
        $this->student_id = $student_id;
        $this->student = Student::findOrFail($student_id);
        $this->selected = $selected;
        $this->selected2 = $selected2;
    }
    public function index() 
    {
        $pdf = PDF::loadView('livewire.pages.ui.filter-students', [
            'title' => 'CodeAndDeploy.com Laravel Pdf Tutorial',
            'description' => 'This is an example Laravel pdf tutorial.',
            'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
        ]);
        return $pdf->download('sample.pdf');
    }
}
