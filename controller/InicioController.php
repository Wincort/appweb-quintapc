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
        $this->view("inicio",array());
    }

    public function Fase1(){

        $lote=new Lote($this->adapter);
        $lotesVendidos=$lote->getByThreeParameters("id_terreno",1,"estado_lote",0,"publicar",1);
        $lotesDisponibles=$lote->getByThreeParameters("id_terreno",1,"estado_lote",1,"publicar",1);
        $lotesDisputados=$lote->getByThreeParameters("id_terreno",1,"estado_lote",2,"publicar",1);

        $this->view("Fase1",array(
            "lotesVendidos"=>$lotesVendidos,
            "lotesDisponibles"=>$lotesDisponibles,
            "lotesDisputados"=>$lotesDisputados
        ));

    }

    public function Contacto(){
        $this->view("Contacto",array());
    }

    public function GuardarMensaje(){

        $contacto=new Contacto($this->adapter);
        $contacto->setNombre($_POST["nombre"]);
        $contacto->setApellido($_POST["apellido"]);
        $contacto->setEmail($_POST["correo"]);
        $contacto->set_telefono($_POST["telefono"]);
        $contacto->set_mensaje($_POST["mensaje"]);
        $result=$contacto->save();

        if($result){
            echo '{"status":true,"titulo":"Mensaje guardado","mensaje":"El mensaje fue guardado en la base de datos"}';
        }
        else{
            echo '{"status":false,"titulo":"Error!","mensaje":"El mensaje no fue guardado en la base de datos"}';
        }
    }
    
}
?>
