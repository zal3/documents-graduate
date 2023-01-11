<?php

namespace App\Http\Livewire\Pages\Document;
use App\Models\Student;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class ShowArDoc extends Component
{
   

    public function render()
    {
        return view('livewire.pages.document.show-ar-doc');
    }
}
