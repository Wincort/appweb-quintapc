<?php
class Terreno extends EntidadBase{
    private $id;
    private $nombre;
    private $archivo;
    private $FC;
    private $FUM;
    private $UC;
    private $UUM;
    private $estatus;
    
    public function __construct($adapter) {
        $table="terreno";
        parent::__construct($table, $adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getUC() {
        return $this->UC;
    }

    public function setUC($UC) {
        $this->UC = $UC;
    }

    public function getUUM() {
        return $this->UUM;
    }

    public function setUUM($UUM) {
        $this->UUM = $UUM;
    }

    public function getArchivo(){
        return $this->archivo;
    }

    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getEstatus() {
        return $this->estatus;
    }

    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    public function save(){
        $query="INSERT INTO terreno (id,nombre,UC,FC,UUM,FUM,estatus)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->UC."',
                       NOW(),
                       '".$this->UUM."',
                       NOW(),
                       '".$this->estatus."');";             
        $save=$this->db()->query($query);
        return $save;
    }
    public function update($id){
        $query="UPDATE terreno SET 
                    nombre='".$this->nombre."',
                    UUM='".$this->UUM."',
                    FUM=NOW(),
                    estatus='".$this->estatus."'
                WHERE id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }

    

}
?>