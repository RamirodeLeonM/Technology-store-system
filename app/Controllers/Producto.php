<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use CodeIgniter\HTTP\IncomingRequest;


class Producto extends BaseController
{
   protected $productoModel;
   protected $uri;
   protected $request;

   public function __construct(){
    $this->productoModel = new ProductoModel();
    $this->uri = service('uri');
    $this->request = service('request');
   }
   //ver listado de productos
   public function listar_productos(){
    $result=$this->productoModel->getProductos();
    $datos["productos"] = $result;
    return view("listadoproductos", $datos);
   }
   //ver el formulario
   public function formulario_producto(){
    return view ("insertarproducto");
}
    //insertar productos
   public function insertar_producto(){
    $producto["nombre"]=$this->request->getPost("nombre");
    $producto["descripcion"]=$this->request->getPost("descripcion");
    $producto["marca"]=$this->request->getPost("marca");
    $producto["categoria"]=$this->request->getPost("categoria");
    $producto["preciocosto"]=$this->request->getPost("preciocosto");
    $producto["preciounitario"]=$this->request->getPost("preciounitario");
    $producto["cantidad"]=$this->request->getPost("cantidad");
    $producto["fechacompra"]=$this->request->getPost("fechacompra");
    $result = $this->productoModel->insertProductos($producto);
    
    $result=$this->productoModel->getProductos();
    $datos["productos"] = $result;
    return view("listadoproductos", $datos);
    }

    //ver el formulario para editar
   public function formularioeditar_producto(){
    $id=$this->uri->getSegment(2); 
    $result =$this->productoModel->getProductoEditar($id);
    $datos["productos"] = $result;
    return view("editarproducto", $datos);
    }
    //actualizar usuario
   public function actualizar_producto(){
    $id=$this->uri->getSegment(2);

    $producto["nombre"]=$this->request->getPost("nombre");
    $producto["descripcion"]=$this->request->getPost("descripcion");
    $producto["marca"]=$this->request->getPost("marca");
    $producto["categoria"]=$this->request->getPost("categoria");
    $producto["preciocosto"]=$this->request->getPost("preciocosto");
    $producto["preciounitario"]=$this->request->getPost("preciounitario");
    $producto["cantidad"]=$this->request->getPost("cantidad");
    $producto["fechacompra"]=$this->request->getPost("fechacompra");

    $result = $this->productoModel->updateProducto($producto, $id);
    
    return redirect()->to(base_url('/public/listadoproductos'));
    }
    //borrar computadora
   public function borrar_producto(){
    $id=$this->uri->getSegment(2); 
    $result =$this->productoModel->deleteProducto($id);

    return redirect()->to(base_url('/public/listadoproductos'));
    }

    public function buscar(){
        $query=$this->uri->getSegment(2); 
        $result =$this->productoModel->buscar($query);
        $datos["productos"] = $result;
        return view("editarproducto", $datos);
        /*$query = $this->input->get('query', TRUE);
        $result = $this->productoModel->buscar(trim($query));*/
    }
}

?>