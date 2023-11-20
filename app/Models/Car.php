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

    public function create(array $data, ?array $relations = null)
    {
        parent::create($data);

        $id = $this->get->getPDO()->lastInsertId();

        foreach ($relations as $carOptionId){
            $stmt=$this->db->getPDO()->prepare("INSERT car_option (carId, optionId) VALUES (?, ?)");
            $stmt->execute([$id, $carOptionId]);
        }
        return true;
    }

    public function update(int $id, array $data, ?array $relations = null) 
    {
        parent::update($id, $data); 

        $stmt = $this->db->getPDO()->prepare("DELETE FROM car_option WHERE carId = ?");
        $result = $stmt->execute([$id]);

        foreach ($relations as $carOptionId){
            $stmt=$this->db->getPDO()->prepare("INSERT car_option (carId, optionId) VALUES (?, ?)");
            $stmt->execute([$id, $carOptionId]);
        }
        
        if($result){
            return true;
        }
    }
}
