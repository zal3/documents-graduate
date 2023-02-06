<?php

namespace App\Http\Livewire\Pages\Graduate;
use App\Models\{Student,  Degree, Subject};
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Profile extends Component
{
    use LivewireAlert;

    public $student_id ,$degree, $student ,$show , $name_ar , $name_en , $gender , $graduation_year , $average , $round , $image_path , $department_id , $type , $average_written;
    
    protected $listeners = [ '$refresh','delete'];

    public function mount ($id){
        $this->student_id = $id;
        $this->student = Student::findOrFail($id);
        $this->name_ar = $this->student->name_ar;
        $this->name_en = $this->student->name_en;
        $this->gender = $this->student->gender;
        // $this->graduation_year = $this->student->graduation_year;
        // $this->average = $this->student->average;
        // $this->round = $this->student->round;
        $this->image_path = $this->student->image_path;
        // $this->department_id = $this->student->department_id;
        // $this->type = $this->student->type;
        $this->average_written = $this->student->average_written;
    }
    public function delete()
    {
        Student::findOrFail($this->student_id)->delete();
        $this->alert('success', 'تم الحذف ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.graduate.main', '$refresh');
        redirect()->route('graduate');


    }

    public function confirm($id)
    {
        $this->student_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الطالب؟', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }
    public function render()
    {
       
        $student = Student::find($this->student_id);
        $this->average=  $student->degrees->avg('degree');
        return view('livewire.pages.graduate.profile');
    }
}
