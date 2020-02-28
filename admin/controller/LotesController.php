<?php
class LotesController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){

        if(isset($_GET["id"])){
            $idTerreno=$_GET["id"];
            $lotes=new Lote($this->adapter);
            $all_lotes=$lotes->getBy("id_terreno",$idTerreno);
            $titulo="Lotes";
            $this->view("lotes",array(
                "all_lotes"=>$all_lotes,
                "titulo"=> $titulo,
                "id_terreno"=>$idTerreno
            ));
        }
        $this->redirect("Terrenos", "index");
        
    }
    
    public function crear(){

        $userSession = new Sesiones();
        $IdUsuario=$userSession->getCurrentUserId();
        $lote=new Lote($this->adapter);
        $lote->setNombre($_POST["nombre"]);
        $lote->set_codigo($_POST["codigo"]);
        $lote->set_coordenadas($_POST["coordenadas"]);
        $lote->set_estado_lote($_POST["estado_lote"]);
        $lote->set_medida($_POST["medida"]);
        $lote->set_medida_detalle($_POST["medida_detalle"]);
        $lote->set_precio_m2($_POST["precio_m2"]);
        //$lote->set_precio_financiado($_POST["precio_financiado"]);
        $lote->set_precio_contado($_POST["precio_contado"]);
        $lote->setUC($IdUsuario);
        $lote->setUUM($IdUsuario);
        $lote->setPublicar($_POST["publicar"]);
        $idTerreno=$_POST["id_terreno"];
        $lote->setId_Terreno($idTerreno);
        $lote->save();

        
        $params="id=".$idTerreno;
        $this->redirect("Lotes", "index", $params);
        
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $userSession = new Sesiones();
            $IdUsuario=$userSession->getCurrentUserId();
            $lote=new Lote($this->adapter);
            $id=(int)$_GET["id"];
            $lote->setId($id);
            $lote->setNombre($_POST["nombre"]);
            $lote->set_codigo($_POST["codigo"]);
            $lote->set_coordenadas($_POST["coordenadas"]);
            $lote->set_estado_lote($_POST["estado_lote"]);
            $lote->set_medida($_POST["medida"]);
            $lote->set_medida_detalle($_POST["medida_detalle"]);
            $lote->set_precio_m2($_POST["precio_m2"]);
            $lote->set_precio_contado($_POST["precio_contado"]);
            //$lote->set_precio_financiado($_POST["precio_financiado"]);
            $lote->setUUM($IdUsuario);
            $lote->setPublicar($_POST["publicar"]);
            $lote->update($id);
        }
        $idTerreno=$_POST["id_terreno"];
        $params="id=".$idTerreno;
        $this->redirect("Lotes", "index", $params);
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            $lote=new Lote($this->adapter);
            $lote->deleteById($id);
        }
        $idTerreno=$_GET["id_terreno"];
        $params="id=".$idTerreno;
        $this->redirect("Lotes", "index", $params);
    }

}
?>
