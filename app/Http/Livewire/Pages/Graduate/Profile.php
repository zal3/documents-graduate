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
        // average of degree tow boints 
        $this->average = Degree::where('student_id', $this->student_id, function($query){$query->where('department_id', $this->student->department_id);})->avg('degree');
        // $degrees = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',1)->where('course',1)->where('department_id', $this->student->department_id);})->get();
        // $degrees1 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',1)->where('course',2)->where('department_id', $this->student->department_id);})->get();
        // $degrees2 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',2)->where('course',1)->where('department_id', $this->student->department_id);})->get();
        // $degrees3 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',2)->where('course',2)->where('department_id', $this->student->department_id);})->get();
        // $degrees4 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',3)->where('course',1)->where('department_id', $this->student->department_id);})->get();
        // $degrees5 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',3)->where('course',2)->where('department_id', $this->student->department_id);})->get();
        // $degrees6 = Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',4)->where('course',1)->where('department_id', $this->student->department_id);})->get();
        // $degrees7= Degree::where('student_id',$this->student_id , function($query){$query->where('department_id', $this->student->department_id);})->whereHas('subject', function($query){$query->where('stage',4)->where('course',2)->where('department_id', $this->student->department_id);})->get();
        // $degrees8 = Subject::where('student_id',$this->student_id)->where('department_id', $this->student->department_id)->with('degree')->get();
        
        return view('livewire.pages.graduate.profile');
    }
}
