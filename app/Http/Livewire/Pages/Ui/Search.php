<?php

namespace App\Http\Livewire\Pages\Ui;

use Livewire\Component;

class Search extends Component
{protected $queryString = ['search'];

    public $search;
    public function render()
    {$this->emit('search', $this->search);
        return view('livewire.pages.ui.search');
    }
}
