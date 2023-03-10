<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar'];

    ### Relation ###

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function unids()
    {
        return $this->hasMany(Unid::class);
    }

    ### End Relation ###
}
