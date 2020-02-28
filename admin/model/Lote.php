<?php
class Lote extends EntidadBase{
    private $id;
    private $id_terreno;
    private $nombre;
    private $codigo;
    private $coordenadas;
    private $estado_lote;
    private $medida;
    private $medida_detalle;
    private $precio_m2;
    private $precio_contado;
    private $precio_financiado;
    private $FC;
    private $FUM;
    private $UC;
    private $UUM;
    private $publicar;
    
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

    public function getId_Terreno() {
        return $this->id_terreno;
    }

    public function setId_Terreno($id_terreno) {
        $this->id_terreno = $id_terreno;
    }


    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function get_codigo(){
        return $this->codigo;
    }

    public function set_codigo($codigo) {
        $this->codigo = $codigo;
    }

    public function get_coordenadas(){
        return $this->coordenadas;
    }

    public function set_coordenadas($coordenadas) {
        $this->coordenadas = $coordenadas;
    }

    public function get_estado_lote(){
        return $this->estado_lote;
    }

    public function set_estado_lote($estado_lote) {
        $this->estado_lote = $estado_lote;
    }
    
    public function get_medida(){
        return $this->medida;
    }

    public function set_medida($medida) {
        $this->medida = $medida;
    }

    public function get_medida_detalle(){
        return $this->medida_detalle;
    }

    public function set_medida_detalle($medida_detalle) {
        $this->medida_detalle = $medida_detalle;
    }

    public function get_precio_m2(){
        return $this->precio_m2;
    }

    public function set_precio_m2($precio_m2) {
        $this->precio_m2 = $precio_m2;
    }

    public function get_precio_financiado(){
        return $this->precio_financiado;
    }

    public function set_precio_financiado($precio_financiado) {
        $this->precio_financiado = $precio_financiado;
    }

    public function get_precio_contado(){
        return $this->precio_contado;
    }

    public function set_precio_contado($precio_contado) {
        $this->precio_contado = $precio_contado;
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

    public function getPublicar() {
        return $this->publicar;
    }

    public function setPublicar($publicar) {
        $this->publicar = $publicar;
    }

    public function save(){
        $query="INSERT INTO lotes (id,id_terreno,nombre,codigo,coordenadas,estado_lote,medida,medida_detalle,precio_m2,precio_contado,UC,FC,UUM,FUM,publicar)
                VALUES(NULL,
                       '".$this->id_terreno."',
                       '".$this->nombre."',
                       '".$this->codigo."',
                       '".$this->coordenadas."',
                       '".$this->estado_lote."',
                       '".$this->medida."',
                       '".$this->medida_detalle."',
                       '".$this->precio_m2."',
                       '".$this->precio_contado."',
                       '".$this->UC."',
                       NOW(),
                       '".$this->UUM."',
                       NOW(),
                       '".$this->publicar."');";             
        $save=$this->db()->query($query);
        return $save;
    }
    public function update($id){
        $query="UPDATE lotes SET 
                    nombre='".$this->nombre."',
                    codigo='".$this->codigo."',
                    coordenadas='".$this->coordenadas."',
                    estado_lote='".$this->estado_lote."',
                    medida='".$this->medida."',
                    medida_detalle='".$this->medida_detalle."',
                    precio_m2='".$this->precio_m2."',
                    precio_contado='".$this->precio_contado."',
                    UUM='".$this->UUM."',
                    FUM=NOW(),
                    publicar='".$this->publicar."'
                WHERE id=".$id."
                ";             
        $update=$this->db()->query($query);
        return $update;
    }

    

}
?>