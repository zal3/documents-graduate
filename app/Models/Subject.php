<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'name_en', 'name_ar',  'course', 'stage', 'unit'];

    ### Relation ###
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function degree()
    {
        return $this->hasOne(Degree::class);
    }
    ### End Relation ###

    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###

    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###
}
