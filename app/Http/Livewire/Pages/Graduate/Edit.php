<?php

namespace App\Http\Livewire\Pages\Graduate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Student;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    public $student_id , $student , $name_ar , $name_en , $gender , $graduation_year , $average , $round , $image_path , $department_id , $type , $average_written;
    protected $rules =[
        'name_ar' => 'required',
        'name_en' =>'required' ,
        'gender' => 'required',
        'graduation_year' => 'required',
        'average' => 'required',
        'round' => 'required',
        'department_id' => 'required',
        'type' => 'required',
        'average_written' => 'required',
    ];
    
    public function mount($id){
        $this->student_id = $id;
        $this->student = Student::findOrFail($id);
        $this->name_ar = $this->student->name_ar;
        $this->name_en = $this->student->name_en;
        $this->gender = $this->student->gender;
        $this->graduation_year = $this->student->graduation_year;
        $this->average = $this->student->average;
        $this->round = $this->student->round;
        $this->image_path = $this->student->image_path;
        $this->department_id = $this->student->department_id;
        $this->type = $this->student->type;
        $this->average_written = $this->student->average_written;
    }

    public function edit()
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
                'department_id' => $this->department_id,
                'type' => $this->type,
                'average_written' => $this->average_written,
            ];
        

        $student = Student::findOrFail($this->student_id);
        $student->edit($data);
        
        // if ($this->new_image){
        //     $student->update_image($this->new_image); 
        // }
        
        
        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('graduate');
    }
    public function render()
    {
        return view('livewire.pages.graduate.edit');
    }
}
