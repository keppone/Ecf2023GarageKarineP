<?php 

namespace App\Controllers;


class SiteController extends Controller
{

    public function index()
    {
        return $this->view('site.index');  
    }

    public function show(int $id)
    {
        $req = $this->db->getPDO()->query("SELECT * FROM car");
        $cars = $req->fetchAll();

        foreach ($cars as $car){
            echo $car->name;
        }
        return $this->view('site.show', compact('id'));

    }

}

    


