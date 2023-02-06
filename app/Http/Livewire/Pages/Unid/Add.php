<?php

namespace App\Http\Livewire\Pages\Unid;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\{Unid};

class Add extends Component
{
    use LivewireAlert;
    public $number, $date, $department_id, $type, $round, $graduation_year;
    protected $rules = [
        'number' => 'required',
        'date' => 'required',
        'department_id' => 'required',
        'type' => 'required',
        'round' => 'required',
        'graduation_year' => 'required',
    ];
    public function add()
    {
        $this->validate();
        $unid = Unid::create(
            [
                'number' => $this->number,
                'date' => $this->date,
                'department_id' => $this->department_id,
                'type' => $this->type,
                'round' => $this->round,
                'graduation_year' => $this->graduation_year,
            ]
        );
        $this->alert('success', 'تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.unid.add');
    }
}
