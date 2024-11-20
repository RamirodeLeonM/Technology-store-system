<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\IncomingRequest;


class Usuario extends BaseController
{
   protected $usuarioModel;
   protected $uri;
   protected $request;

   public function __construct(){
    $this->usuarioModel = new UsuarioModel();
    $this->uri = service('uri');
    $this->request = service('request');
   }

   //ver pagina principal
   public function principal(){
      return view ("principal");
   }
   //ver listado de usuarios
   public function listar_usuarios(){
      $result=$this->usuarioModel->getUsuarios();
      $datos["usuarios"] = $result;
      return view("listadousuario", $datos);
     }
     
     
     
     
     //ver el formulario de login
   public function formulario_login(){      
      return view("index");
   }
     //login
     public function login(){
      $usuario["usuario"]=$this->request->getPost("usuario");
      $usuario["contra"]=$this->request->getPost("contra");
      $result = $this->usuarioModel->ingresarLogin($usuario);
      if($result==1){
         $data=['usuario' => $usuario["usuario"]];
         $session = session();
         $session ->set($data);
         return view ("principal");
      }else{
         return view("index");
      }

   }
   public function salir(){
      $session = session();
      $session->destroy();
      return view("index");
   }


}
?>