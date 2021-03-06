<?php
require_once '../../models/cliente_entidad.php';
require_once '../../models/cliente_model.php';

class ClienteController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new ClienteModel();
    }

    public function Index(){
        include"../../templates/body/header2.php";
        require_once '../../templates/modulos/clientes.php';
        // require_once '../../templates/body/pie.php';
    }

    public function Crud(){
        $alm = new Cliente();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        include"../../templates/body/header2.php";
        require_once '../../templates/modulos/cliente_editar.php';
        /*require_once 'view/footer.php';*/
    }

    public function Guardar(){
        $alm = new Cliente();

        $alm->__SET('id',              $_REQUEST['id']);
        $alm->__SET('DUI',             $_REQUEST['DUI']);
        $alm->__SET('Nombre',          $_REQUEST['Nombre']);
        $alm->__SET('Apellido',        $_REQUEST['Apellido']);
        $alm->__SET('direccion',       $_REQUEST['direccion']);
        $alm->__SET('telefono',        $_REQUEST['telefono']);;
        $alm->__SET('Sexo',            $_REQUEST['Sexo']);
        $alm->__SET('FechaNacimiento', $_REQUEST['FechaNacimiento']);
        $alm->__SET('Correo',          $_REQUEST['Correo']);

        if($alm->__GET('id') != '' ?
           $this->model->Actualizar($alm) :
           $this->model->Registrar($alm));

        header('Location: ../../templates/modulos/lista_cliente.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ../../templates/modulos/lista_cliente.php');
    }
}
