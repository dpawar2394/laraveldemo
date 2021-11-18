<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cources extends Model
{
    use HasFactory;


    protected $table = 'Cources';

    protected $fillable = ['cource_name'];

   //protected $attributes = ['name'=>'assddd'];


   public function students() {

    return $this->belongsTo(students::class,'id','cource_id');  // relashaship


   }
}