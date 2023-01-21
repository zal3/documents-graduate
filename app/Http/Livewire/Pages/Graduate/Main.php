<?php

namespace App\Http\Livewire\Pages\Graduate;
use App\Models\Student;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $students = Student::with('department')->get();
        return view('livewire.pages.graduate.main', compact('students'));
    }
}
