<?php

namespace App\Http\Livewire\Pages\Graduate;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\Student;


class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $name_en ,$name_ar ,$gender ,$graduation_year ,$average ,$round ,$image_path ,$department_id ;
    protected $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'gender' => 'required',
        'graduation_year' => 'required',
        'average' => 'required',
        'round' => 'required',
        // 'department_id' => 'required',
    ];

    public function add(Student $student)
    {
        
        $this->validate();

        $data = [
            'name_en' => $this->name_en,
            'name_ar' => $this->name_ar,
            'gender' => $this->gender,
            'graduation_year' => $this->graduation_year,
            'average' => $this->average,
            'round' => $this->round,
            'image_path' => $this->image_path,
            // 'department_id' => $this->department_id,
        ];
        //  dd($data);
            $student = new Student();
            $student->add($data);

                
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
        return view('livewire.pages.graduate.add');
    }
}
