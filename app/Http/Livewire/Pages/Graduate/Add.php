<?php

namespace App\Http\Livewire\Pages\Graduate;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\{Student,  Degree, Subject};
use Termwind\Components\Dd;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name_en, $name_ar, $gender, $graduation_year, $average , $round, $image_path,
        $department_id, $departments, $type, $student_id, $subject_id, $degree1 = [], $degree2 = [], $degree0 = [], $degree3 = [], $degree4 = [], $degree5 = [], $degree6 = [], $degree7 = [];
    protected $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'gender' => 'required',
        'graduation_year' => 'required',
        'round' => 'required',
        'department_id' => 'required',
        'type' => 'required',
    ];
    public function add(Student $student, Subject $subject)
    {

        $this->validate();
        $student = Student::create(
            [
                'name_en' => $this->name_en,
                'name_ar' => $this->name_ar,
                'gender' => $this->gender,
                'graduation_year' => $this->graduation_year,
                // 'average' => $this->average,
                'round' => $this->round,
                'image_path' => $this->image_path,
                'department_id' => $this->department_id,
                'type' => $this->type,
                // 'average_written' => $this->average_written,
            ]
        );

        $subjects0 = Subject::where('stage', 1)->where('course', 1)->get();
        foreach ($subjects0 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree0[$subject->id]
            ]);
        }
        $subjects1 = Subject::where('stage', 1)->where('course', 2)->get();
        foreach ($subjects1 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree1[$subject->id]
            ]);
        }

        $subjects2 = Subject::where('stage', 2)->where('course', 1)->get();
        foreach ($subjects2 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree2[$subject->id]
            ]);
        }
        $subjects3 = Subject::where('stage', 2)->where('course', 2)->get();
        foreach ($subjects3 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree3[$subject->id]
            ]);
        }
        $subjects4 = Subject::where('stage', 3)->where('course', 1)->get();
        foreach ($subjects4 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree4[$subject->id]
            ]);
        }
        $subjects5 = Subject::where('stage', 3)->where('course', 2)->get();
        foreach ($subjects5 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree5[$subject->id]
            ]);
        }
        $subjects6 = Subject::where('stage', 4)->where('course', 1)->get();
        foreach ($subjects6 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree6[$subject->id]
            ]);
        }
        $subjects7 = Subject::where('stage', 4)->where('course', 2)->get();
        foreach ($subjects7 as  $subject) {
            $degree = Degree::create([
                'student_id' => $student->id,
                'subject_id' =>   $subject->id,
                'degree' => $this->degree7[$subject->id]
            ]);
        }

        if ($this->image_path)
            $student->add_image($this->image_path);

        $this->reset();

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        // if($this->department_id ==1 ){
        $subjects0 = Subject::where('stage', 1)->where('course', 1)->get();
        $subjects1 = Subject::where('stage', 1)->where('course', 2)->get();
        $subjects2 = Subject::where('stage', 2)->where('course', 1)->get();
        $subjects3 = Subject::where('stage', 2)->where('course', 2)->get();
        $subjects4 = Subject::where('stage', 3)->where('course', 1)->get();
        $subjects5 = Subject::where('stage', 3)->where('course', 2)->get();
        $subjects6 = Subject::where('stage', 4)->where('course', 1)->get();
        $subjects7 = Subject::where('stage', 4)->where('course', 2)->get();
        // }else{
        // $subjects0 = Subject::where('stage', 1)->where('course', 1)->where('department_id', 2)->get();
        // $subjects1 = Subject::where('stage', 1)->where('course', 2)->where('department_id', 2)->get();
        // $subjects2 = Subject::where('stage', 2)->where('course', 1)->where('department_id', 2)->get();
        // $subjects3 = Subject::where('stage', 2)->where('course', 2)->where('department_id', 2)->get();
        // $subjects4 = Subject::where('stage', 3)->where('course', 1)->where('department_id', 2)->get();
        // $subjects5 = Subject::where('stage', 3)->where('course', 2)->where('department_id', 2)->get();
        // $subjects6 = Subject::where('stage', 4)->where('course', 1)->where('department_id', 2)->get();
        // $subjects7 = Subject::where('stage', 4)->where('course', 2)->where('department_id', 2)->get();
        // }
        return view('livewire.pages.graduate.add', compact(
            'subjects0',
            'subjects1',
            'subjects2',
            'subjects3',
            'subjects4',
            'subjects5',
            'subjects6',
            'subjects7'
        ));
    }
}
