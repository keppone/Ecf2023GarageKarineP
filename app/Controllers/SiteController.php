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
       return $this->view('site.show', compact('id'));
    }
}
