<?php
class MensajesController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        $mensaje=new Contacto($this->adapter);
        $mensajes=$mensaje->getAll();
        $titulo="Mensajes";
        $this->view("mensajes",array(
            "mensajes"=>$mensajes,
            "titulo"=> $titulo
        ));

    }

    public function actualizar_revisado(){
        $mensaje=new Contacto($this->adapter);
        $mensaje->setId($_REQUEST["id"]);
        $result=$mensaje->correo_revisado();
        $resultado=$result?'{"status":true}':'{"status":false}';
        print_r($resultado);
    }

}
?>
