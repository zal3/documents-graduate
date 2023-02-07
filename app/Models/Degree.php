<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'subject_id', 'degree'];

    ### Relation ###
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###
}
