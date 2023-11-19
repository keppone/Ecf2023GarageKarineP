<?php 

namespace App\Controllers;

use App\Models\Car;
use App\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $car = new Car($this->getDB());
        $cars = $car->all();

        return $this->view('site.index', compact('cars')); 
    }

    public function show(int $id)
    {
        $car = new Car($this->getDB());
        $car = $car->findById($id);

        return $this->view('site.show', compact('car'));
    }

}

    


