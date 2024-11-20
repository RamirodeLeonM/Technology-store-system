<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductoModel extends Model
{
    //ver producto
    /*
    public function getProductos(){
        $builder = $this->db->table("producto");
        $builder->select('*');
        $result = $builder->get();
        return $result->getResultArray();
    }

    
    //ver productos inner join con categoria
    public function getProductos(){
        $this->db->select("p.*,c.descripcion as categoria");
        $this->db->from("producto p");
        $this->db->join("categoria c","p.categoria = c.idcategoria");

        $result = $builder->get();
        return $result->getResultArray();
    }
    */
    //ver productos con inner join para categorias
    public function getProductos(){
        $result =$this->db->query("Select p.idproducto, p.nombre, p.descripcion  , p.marca, c.descripcion as 'categoria', p.preciocosto, p.preciounitario, p.cantidad, p.fechacompra from producto p, categoria c 
        where p.categoria = c.idcategoria");        
        return $result->getResultArray();
    }


    //insertar producto
    public function insertProductos($producto){
        $builder = $this->db->table("producto");
        $result = $builder->insert($producto);
        return $result;
}
    //traer los datos segun el id
    public function getProductoEditar($id){
        $result =$this->db->query("Select * from producto where idproducto = $id");
        return $result->getResultArray();
    }
    public function updateProducto($producto, $id){
        $builder = $this->db->table("producto");         
        $builder->set('nombre', $producto["nombre"]);
        $builder->set('descripcion', $producto["descripcion"]);
        $builder->set('marca', $producto["marca"]);
        $builder->set('categoria', $producto["categoria"]);
        $builder->set('preciocosto', $producto["preciocosto"]);
        $builder->set('preciounitario', $producto["preciounitario"]);
        $builder->set('cantidad', $producto["cantidad"]);
        $builder->set('fechacompra', $producto["fechacompra"]);

        $builder->where('idproducto', $id);
        $builder->update();
    
}
    //borrar producto
    public function deleteProducto($id){
        $result =$this->db->query("Delete from producto where idproducto = $id");
        return $result;
}

    public function buscar($query){
        
    }


}
?>
