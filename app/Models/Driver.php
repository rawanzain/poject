<?php

namespace App\Models;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    use Rateable;

    protected $fillable = [
      'id' ,'user_id', 'name'  , 'car_image' ,'lience', 'model','place' , 'state','city' , 'color' , 'price' , 'quantity' , 'specification' ,'start' , 'end'
    ];


    public function students(){
        return $this->hasMany(Student::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }




}
