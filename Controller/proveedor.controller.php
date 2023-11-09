<?php
require_once 'Model/proveedor.php';

class proveedorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new proveedor();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/proveedor.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new proveedor();
        
        if(isset($_REQUEST['idfabrica'])){
            $alm = $this->model->getting($_REQUEST['idfabrica']);
        }
        
        require_once 'View/header.php';
        require_once 'View/proveedor-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new proveedor();
        
        $alm->idfabrica = $_REQUEST['idfabrica'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->nomempresa = $_REQUEST['nomempresa'];
        $alm->ciudad = $_REQUEST['ciudad'];
        $alm->estado = $_REQUEST['estado'];
        $alm->transporte = $_REQUEST['transporte'];
        $alm->fechallegada = $_REQUEST['fechallegada'];
        $alm->correo = $_REQUEST['correo'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idfabrica > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idfabrica']);
        header('Location: index.php');
    }
}
