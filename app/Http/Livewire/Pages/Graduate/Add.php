<?php

namespace App\Http\Livewire\Pages\Graduate;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\{Student,  Degree, Subject, Unid};
use Termwind\Components\Dd;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public  $studentSearch, $students;
    public $name_en, $name_ar, $gender, $graduation_year, $number, $average, $round, $image_path, $unids, $unid_id,
        $search, $department_id, $departments, $type, $student_id, $subject_id, $degree1 = [], $degree2 = [], $degree0 = [], $degree3 = [], $degree4 = [], $degree5 = [], $degree6 = [], $degree7 = [];
    protected $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'gender' => 'required',
        'unid_id' => 'required',
    ];
    public function add(Student $student, Subject $subject)
    {

        $this->validate();
        $student = Student::create(
            [
                'name_en' => $this->name_en,
                'name_ar' => $this->name_ar,
                'gender' => $this->gender,
                'image_path' => $this->image_path,
                'unid_id' => $this->unid_id,
            ]
        );

        if ($this->image_path)
            $student->add_image($this->image_path);

        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->reset();
    }

    public function render()
    {
        if ($this->search) {
            $search = '%' . $this->search . '%';
            $this->unids = Unid::where('number', 'LIKE', $search)->get();
        }
        return view('livewire.pages.graduate.add');
    }
}
