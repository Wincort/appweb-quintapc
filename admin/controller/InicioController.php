<?php
class InicioController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        //$userSession = new Sesiones();
        //$username=$userSession->getCurrentUser();
        $this->view("inicio",array());

    }
    
}
?>
