<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;
use App\Models\Subject;

class Add extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh'];
    public   $stage, $course, $name_ar, $name_en, $unit;

    public function add()
    {
        $this->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'unit' => 'required',
            'stage' => 'required',
            'course' => 'required',
        ]);
        Subject::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'department_id' => 1,
            'stage' => $this->stage,
            'unit' => $this->unit,
            'course' => $this->course,
        ]);
        $this->name_ar = '';
        $this->name_en = '';
        $this->unit = '';
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emit('refresh');
    }
    public function render()
    {
        return view('livewire.pages.department.subject.add');
    }
}
