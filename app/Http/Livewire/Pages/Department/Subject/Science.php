<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Livewire\Component;
use App\Models\Subject;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Science extends Component
{
    use LivewireAlert;
    protected $listeners = ['$refresh', 'search', 'filterProjects', 'delete'];
    public   $stage, $course, $name_ar, $name_en, $unit, $subject_id;
    public $search;
    public function search($search)
    {
        $this->search = $search;
    }
    public function filterProjects($stage, $course)
    {
        $this->stage = $stage;
        $this->course = $course;
    }
    public function delete()
    {
        Subject::findOrFail($this->subject_id)->delete();
        $this->alert('success', 'تم الحذف ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.science.subject', '$refresh');
        redirect()->route('science-subject');
    }

    public function confirm($id)
    {
        $this->subject_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف المادة ؟ ', [
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
        if ($this->stage && $this->course) {
            $subjects = Subject::where('department_id', 1)->where('stage', $this->stage)->where('course', $this->course)
                ->where('name_ar', 'LIKE', '%' . $this->search . '%')->get();
        } else {
            $subjects = [];
        }
        return view('livewire.pages.department.subject.science', compact('subjects'));
    }
}
