<?php
namespace App\Controllers\Admin;

use App\Models\Car;
use App\Controllers\Controller;



class CarController extends Controller {

    public function index()
    {
        $cars = (new Car($this->getDB()))->all(); 

        return $this->view('admin.car.index', compact('cars'));
    }

    public function destroy(int $id)
    {
        $car = new Car($this->getDB());
        $result= $car->destroy($id);

        if ($result){
            return header('Location: /admin/cars');
        }
    }
}
