<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['unid_id', 'average_written', 'name_en', 'name_ar', 'gender', 'average', 'image_path'];

    ### Relation ###
    public function degrees()
    {
        return $this->hasMany(Degree::class);
    }
    public function unid()
    {
        return $this->belongsTo(Unid::class);
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



    ### image ###

    //add_image
    public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/student/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/student/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/student/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/student/' . $this->id . '/images/' . $name;
        $this->save();
    }

    ### End image ###
}
