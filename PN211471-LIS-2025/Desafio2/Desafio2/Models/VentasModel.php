<?php
require_once 'Model.php';

class VentasModel extends Model {
    private $model;

    public function get($id = '') {
        if ($id == '') {
            $query = "SELECT * FROM ventas";
            return $this->get_query($query);
        } else {
            $query = "SELECT * FROM ventas WHERE codigo_ventas=:id_venta";
            return $this->get_query($query, ['id_venta' => $id]);
        }

    }

    public function insert($venta = array()){
        $query = "INSERT INTO ventas (codigo_ventas, codigo_cliente, total)
          VALUES (:codigo_ventas, :codigo_cliente, :total)";
        return $this->set_query($query, $venta);
    }

    //borra venta
    public function delete($id = '') {
        $query = "DELETE FROM ventas WHERE codigo_ventas=:codigo_ventas";
        return $this->set_query($query, ['codigo_ventas' => $id]);
    }

}


?>