<?php

namespace App\Http\Livewire\Pages\Graduate;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\Student;
use App\Models\Subject;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $name_en, $name_ar, $gender,$average_written, $graduation_year, $average, $round, $image_path,
     $department_id , $departments ,$type, $degree, $student_id ,$subject_id;
    protected $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'gender' => 'required',
        'graduation_year' => 'required',
        'average' => 'required',
        'round' => 'required',
        'department_id' => 'required',
        'type' => 'required',
        'average_written' => 'required',
    ];

    public function add(Student $student)
    {

        $this->validate();
        $student = Student::create(
            [
                'name_en' => $this->name_en,
                'name_ar' => $this->name_ar,
                'gender' => $this->gender,
                'graduation_year' => $this->graduation_year,
                'average' => $this->average,
                'round' => $this->round,
                'image_path' => $this->image_path,
                'department_id' => $this->department_id,
                'type' => $this->type,
                'average_written' => $this->average_written,
            ]
        );
        //attach  subject.degree
        //  $student->subjects()->attach($this->subject_id, ['degree' => $this->degree]);

        // foreach ($this->studentSubjects as $subjects) {
        //     if(!$student->subjects()->wherePivot('id', $subjects['id'])->exists())
        //     $student->subjects()->attach($subjects['id']);
        // }
        
        
        if ($this->image_path)
            $student->add_image($this->image_path); 
           
            
        $this->reset();

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    // redirect()->route('students');

    public function render()
    {
        $subjects0 = Subject::where('student_id',$this->student_id)->where('stage',1)->where('course',1)->get();
        $subjects1 = Subject::where('student_id',$this->student_id)->where('stage',1)->where('course',2)->get();
        // $subjects2 = Subject::where('student_id',$this->student_id)->where('stage',2)->where('course',1)->get();
        // $subjects3 = Subject::where('student_id',$this->student_id)->where('stage',2)->where('course',2)->get();
        // $subjects4 = Subject::where('student_id',$this->student_id)->where('stage',3)->where('course',1)->get();
        // $subjects5 = Subject::where('student_id',$this->student_id)->where('stage',3)->where('course',2)->get();
        // $subjects6 = Subject::where('student_id',$this->student_id)->where('stage',4)->where('course',1)->get();
        // $subjects7= Subject::where('student_id',$this->student_id)->where('stage',4)->where('course',2)->get();
        return view('livewire.pages.graduate.add', compact('subjects0','subjects1'));
        // ,'subjects2','subjects3','subjects4','subjects5','subjects6','subjects7'));
    }
}
