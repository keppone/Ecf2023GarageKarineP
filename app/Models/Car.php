<?php

namespace App\Models; 

use DateTime;
use App\Models\Model;

class Car extends Model{
    
    protected $table = 'car';

    public function getDateCirculation()
    {
       return (new DateTime($this->dateInCirculation))->format('m/Y');
    } 

}
