<?php

namespace App\Models; 

use PDO;
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

    public function getImage()
    {
        return $this->query(" 
        SELECT i.* FROM image i
        INNER JOIN car_image ci ON ci.imageId = i.id
        WHERE ci.carId = ?
        ", [$this->id]);
        
    }

    public function getCaracCar()
    {
        return $this->query(" 
        SELECT ca.* FROM caracteristics ca
        INNER JOIN car_carac cc ON cc.caracId = ca.id
        WHERE cc.carId = ?
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
