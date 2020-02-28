<?php
class TerrenosController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        $terreno=new Terreno($this->adapter);
        $allterrenos=$terreno->getAll();
        $titulo="Terrenos";
        $this->view("terrenos",array(
            "allterrenos"=>$allterrenos,
            "titulo"=> $titulo
        ));

    }
    
    public function crear(){
        //if(isset($_POST["periodo"])){
            $userSession = new Sesiones();
            $IdUsuario=$userSession->getCurrentUserId();
            $terreno=new Terreno($this->adapter);
            $terreno->setNombre($_POST["nombre"]);
            $terreno->setUC($IdUsuario);
            $terreno->setUUM($IdUsuario);
            $terreno->setEstatus($_POST["estatus"]);
            $terreno->save();
        //}
        $this->redirect("Terrenos", "index");
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $userSession = new Sesiones();
            $IdUsuario=$userSession->getCurrentUserId();
            $terreno=new Terreno($this->adapter);
            $id=(int)$_GET["id"];
            $terreno->setId($id);
            $terreno->setNombre($_POST["nombre"]);
            $terreno->setUUM($IdUsuario);
            $terreno->setEstatus($_POST["estatus"]);
            $terreno->update($id);
        }
        $this->redirect("Terrenos", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            $terreno=new Terreno($this->adapter);
            $terreno->deleteById($id);
        }
        $this->redirect("Terrenos", "index");
    }

}
?>
