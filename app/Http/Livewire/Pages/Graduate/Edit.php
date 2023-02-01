<?php

namespace App\Http\Livewire\Pages\Graduate;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\{Student, Unid};
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public  $studentSearch, $search, $unids;
    public $student_id, $unid_id, $student, $name_ar, $name_en, $gender, $graduation_year, $average, $round, $image_path, $department_id, $type, $average_written, $new_image;
    protected $rules = [
        'name_ar' => 'required',
        'name_en' => 'required',
        'gender' => 'required',
        'unid_id' => 'required',
    ];

    public function mount($id)
    {
        $this->student_id = $id;
        $this->student = Student::findOrFail($id);
        $this->name_ar = $this->student->name_ar;
        $this->name_en = $this->student->name_en;
        $this->gender = $this->student->gender;
        $this->average = $this->student->average;
        $this->image_path = $this->student->image_path;
        $this->unid_id = $this->student->unid_id;
        $this->average_written = $this->student->average_written;
    }

    public function edit()
    {
        $this->validate();

        $data = [
            'name_en' => $this->name_en,
            'name_ar' => $this->name_ar,
            'gender' => $this->gender,
            'image_path' => $this->image_path,
            'unid_id' => $this->unid_id,
        ];


        $student = Student::findOrFail($this->student_id);
        $student->edit($data);

        if ($this->new_image) {
            $student->update_image($this->new_image);
        }


        $this->alert('success', 'تم التعديل', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('graduate');
    }
    public function render()
    {
        if ($this->search) {
            $search = '%' . $this->search . '%';
            $this->unids = Unid::where('number', 'LIKE', $search)->get();
        }
        return view('livewire.pages.graduate.edit');
    }
}
