<?php

namespace App\Controllers;

use App\Class\Services;

require(\dirname(__DIR__,1)."/Class/Services.php");

class ServicesController extends Services{
    public function allServices(){
        return $this->all();
    }

    public function searchServiceName(String $name){
        return $this->find($name);
    }

    public function addService(String $name){
        return $this->insert($name);
    }

    public function updateService(String $name, $id){
        return $this->update($name, $id);
    }

    public function deleteService(String $name){
        return $this->delete($name);
    }
}