<?php
class Lote extends EntidadBase{
    private $id;
    private $idTerreno;
    private $nombre;
    private $codigo;
    private $coordenadas;
    private $estado_lote;
    private $medida;
    private $precio_m2;

    public function __construct($adapter) {
        $table="lotes";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdTerreno() {
        return $this->idTerreno;
    }

    public function setIdTerreno($idTerreno) {
        $this->idTerreno = $idTerreno;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCoordenadas() {
        return $this->coordenadas;
    }

    public function setCoordenadas($coordenadas) {
        $this->coordenadas = $coordenadas;
    }

    public function get_estado_lote() {
        return $this->estado_lote;
    }

    public function set_estado_lote($estado_lote) {
        $this->estado_lote = $estado_lote;
    }

    public function get_medida() {
        return $this->medida;
    }

    public function set_medida($medida) {
        $this->medida = $medida;
    }

    public function get_precio_m2() {
        return $this->precio_m2;
    }

    public function set_precio_m2($precio_m2) {
        $this->precio_m2 = $precio_m2;
    }



    /*public function save(){
        $query="INSERT INTO usuarios (id,nombre,apellido,email,password,username,empresa,app_crear,app_modificar,app_borrar,app_consultar,pagar,cancelar,administrador)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->username."',
                       '".$this->empresa."',
                       '".$this->permiso_crear."',
                       '".$this->permiso_modificar."',
                       '".$this->permiso_borrar."',
                       '".$this->permiso_consultar."',
                       '".$this->permiso_pagar."',
                       '".$this->permiso_cancelar."',
                       '".$this->is_admin."');";             
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }*/
    /*public function update($id){
        $query="update usuarios set 
                    nombre='".$this->nombre."',
                    apellido='".$this->apellido."',
                    email='".$this->email."',
                    username='".$this->username."',
                    empresa='".$this->empresa."',
                    app_crear='".$this->permiso_crear."',
                    app_modificar='".$this->permiso_modificar."',
                    app_borrar='".$this->permiso_borrar."',
                    app_consultar='".$this->permiso_consultar."',
                    pagar='".$this->permiso_pagar."',
                    cancelar='".$this->permiso_cancelar."',
                    administrador='".$this->is_admin."'
                where id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }*/

}
?>