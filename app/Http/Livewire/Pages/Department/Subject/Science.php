<?php

namespace App\Http\Livewire\Pages\Department\Subject;

use Livewire\Component;
use App\Models\Subject;

class Science extends Component
{
    public function render()
    {
        $subjects = Subject::where('department_id', 1)->get();
        return view('livewire.pages.department.subject.science', compact('subjects'));
    }
}
