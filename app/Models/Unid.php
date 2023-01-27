<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unid extends Model
{
    use HasFactory;
    protected $fillable = ['department_id','number','date','type','round','graduation_year'];

    ### Relation ###
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
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
