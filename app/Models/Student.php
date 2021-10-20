<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
       'id', 'name' ,'bus_id' , 'driver_id' , 'user_id' ,'department', 'state','city', 'start', 'end', 'day' ,
    ];


    public function bus()
    {
        return $this->belongsTo(Bus::class);
}


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }


public function user(){
        return $this->belongsTo(User::class);
}





}