<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;


    protected $table = 'students';

    protected $fillable = ['name','email','cource_id'];

    public function cources() {

        return $this->hasOne(cources::class,'id','cource_id');  //one to one relashaship

        //return $this->hasMany(cources::class,'id','cource_id');  // one to many relashanship

        // public function getNameAttribute($value)
        // {
        //     return ucfirst($value);
        //
        }




    


}
