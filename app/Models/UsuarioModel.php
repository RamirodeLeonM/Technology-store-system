<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    //ver usuarios
    public function getUsuarios(){
        $builder = $this->db->table("usuarios");
        $builder->select('*');
        $result = $builder->get();
        return $result->getResultArray();
    }
    
    //login
    public function ingresarLogin($usuario){
        $query =$this ->db->query("select * from usuarios");
        foreach($query->getResult() as $row){
            if($usuario["usuario"] == $row->usuario && $usuario["contra"] == $row->contra){
                return $var=1;
            }
        }return $var =0;
    }
}

?>