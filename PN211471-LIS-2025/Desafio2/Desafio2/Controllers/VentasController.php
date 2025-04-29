<?php 
require_once 'Controller.php';
require_once 'Models/VentasModel.php';

class VentasController extends Controller{

    private $model;
    function __construct(){
        if(empty($_SESSION['rol']) || !empty($_SESSION['nombre'])){
            header('location:'.PATH.'/Principal/index');
        }
        $this->model=new VentasModel(); //inicializa la clase ModalVentas
    }

    //funcion para mostrar las ventas
    public function index(){
        $viewBag=[];
        $viewBag['ventas']=$this->model->get();
        $this->render("ventas.php",$viewBag);
    }

    //funcion para eliminar una venta
    public function eliminar($params){
        $id=$params[0];
        $this->model->delete($id);
        header('location:'.PATH.'/Ventas/index');
    }

}

?>