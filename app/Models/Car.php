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

    public function getOptionCar()
    {
        return $this->query(" 
        SELECT o.* FROM optionCarEquipement o
        INNER JOIN car_option co ON co.optionId = o.id
        WHERE co.carId = ?
        ", [$this->id]);
    }
}
