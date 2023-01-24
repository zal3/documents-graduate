<?php

namespace App\Http\Livewire\Pages\Unid;
use App\Models\{Unid};
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Main extends Component
{
    use LivewireAlert;
    protected $listeners = [ '$refresh','delete','search', 'filterUnids'];
    public $unid_id ,$number ,$date ,$department_id ,$type ,$round ,$graduation_year , $search ;
    public function search($search)
    {
        $this->search = $search;
    }    
    public function filterUnids($type ,$round  , $department_id , $graduation_year)
    {
        $this->type = $type;
        $this->round = $round;
        $this->department_id = $department_id;
        $this->graduation_year = $graduation_year;
    }
    public function delete()
    {   
        Unid::findOrFail($this->unid_id)->delete();
        $this->alert('success', 'تم الحذف ', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('pages.unid.add', '$refresh');
        redirect()->route('unid');


    }

    public function confirm($id)
    {
        $this->unid_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الامر ؟ ', [
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
        if($this->graduation_year){
            $unids = Unid::where('graduation_year',$this->graduation_year)->get();
        }elseif($this->department_id){
            $unids = Unid::where('department_id',$this->department_id)->get();
        }elseif($this->round){
            $unids = Unid::where('round',$this->round)->get();
        }elseif($this->type){
            $unids = Unid::where('type',$this->type)->get();
        }elseif($this->search){
            $unids = Unid::where('number','like','%'.$this->search.'%')->get();
        }else{
            $unids = Unid::all();
        }
        return view('livewire.pages.unid.main',compact('unids'));
    }
}
