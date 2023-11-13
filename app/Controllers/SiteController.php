<?php 

namespace App\Controllers;


class SiteController extends Controller
{
    public function welcome()
    {
        return $this->view('site.welcome');  
    }

    public function index()
    {
        $stmt= $this->db->getPDO()->query('SELECT * FROM car');
        $cars = $stmt -> fetchAll();
        
        return $this->view('site.index', compact('cars'));  
    }

    public function show (int $id)
    {
        $stmt = $this->db->getPDO()->prepare('SELECT * FROM car WHERE id = ?');
        $stmt->execute([$id]);
        $car = $stmt->fetch();
        return $this->view('site.show', compact('car'));
    }

}

    


