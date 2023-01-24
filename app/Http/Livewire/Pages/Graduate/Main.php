<?php

namespace App\Http\Livewire\Pages\Graduate;
use App\Models\{Student, Unid};
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search', 'filterStudents'];
    public $search ,$type ,$round , $gender , $department_id , $graduation_year ,$name_ar;
    public function search($search)
    {
        $this->search = $search;
    }    
    public function filterStudents($type ,$round , $gender , $department_id , $graduation_year)
    {
        $this->type = $type;
        $this->round = $round;
        $this->gender = $gender;
        $this->department_id = $department_id;
        $this->graduation_year = $graduation_year;
    }
    public function render()
    {$search = '%' . $this->search . '%';
        $students = Student::with('unid')->where('name_ar' , 'like' , $search)->get();
        if($this->type){
            $students = $students->where('type', $this->type);
        }
        if($this->round){
            $students = $students->where('round', $this->round);
        }
        if($this->gender){
            $students = $students->where('gender', $this->gender);
        }
        if($this->department_id){
            $students = $students->where('department_id', $this->department_id);
        }
        if($this->graduation_year){
            $students = $students->where('graduation_year', $this->graduation_year);
        }   
        return view('livewire.pages.graduate.main', compact('students'));
    }
}
