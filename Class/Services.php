<?php

namespace App\Class;

use App\Database\MySQL;
use DateTime;

require(\dirname(__DIR__,1)."/Database/MySQL.php");
require(\dirname(__DIR__,1)."/vendor/autoload.php");

class Services extends MySQL{

    /**
     * SERVICE LISTING METHOD
    */
    public function all(){
        try{
            
            $sql = "SELECT * FROM  `services-name`";
            $stm = $this->conexao()->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(\PDO::FETCH_ASSOC);

            return $dados;
        }catch(\Exception $e){
            echo $e->getMessage();
            return ['error' => 'Failed to get results.'];
        }
    }

    public function find(String $name){
        try{
            $sql = "SELECT * FROM `services-name` WHERE name = '{$name}'";
            $stm = $this->conexao()->prepare($sql);
            $stm->execute();
            $data = $stm->fetchAll(\PDO::FETCH_ASSOC);

            if($stm->rowCount() > 0){
                return $data;
            }else{
                return "Service not found.";
            }

        }catch(\Exception $e){
            echo $e->getMessage();
            return ['error' => 'Failed to get service.'];
        }
    }

    public function insert(String $name){
        try{
            $sql = "INSERT INTO `services-name` (id, name, date) VALUES(id, '{$name}', NOW())";
            $stm = $this->conexao()->prepare($sql);
            $stm->execute();
            
            if($stm->rowCount() > 0){
                return ['success' => 'Registered service'];
            }else{
                return "Service not found.";
            }
        }catch(\Exception $e){
            echo $e->getMessage();
            return ['error' => 'Failed insert into to database services'];
        }
    }

    public function update(String $name, Int $id){
        try{
            $sql = "UPDATE `services-name` SET name = ? WHERE id = ?";
            $stm = $this->conexao()->prepare($sql);
            $stm->execute([$name, $id]);

            if($stm->rowCount() > 0){
                return ['success' => 'Update success'];
            }else{
                return ['error' => 'Failed update service name'];
            }
        }catch(\Exception $e){
            return ['error' => 'Failed update service.'];
        }
    }

    public function delete(String $name){
        try{
            $sql = "DELETE FROM `services-name` WHERE name = '{$name}'";
            $stm = $this->conexao()->prepare($sql);
            $stm->execute();

            if($stm->rowCount() > 0){
                return ['success' => 'Success delete service'];
            }else{
                return ['error' => 'Failed to delete service'];
            }
        }catch(\Exception $e){
            return ['error' => 'Failed delete service.'];
        }
    }
}