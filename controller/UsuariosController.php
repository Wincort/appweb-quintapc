<?php
class UsuariosController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario($this->adapter);
        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();

        $empresas=new Empresas($this->adapter);
        $allEmpresas=$empresas->getAll_ASC();

        $this->view("index",array(
            "allusers"=>$allusers,
            "allEmpresas"=>$allEmpresas
        ));

    }
    
    public function crear(){
        if(isset($_POST["email"])){
            $app_crear = isset($_POST['app_crear']) ? 1 : 0;
            $app_modificar = isset($_POST['app_modificar']) ? 1 : 0;
            $app_consultar = isset($_POST['app_consultar']) ? 1 : 0;
            $app_borrar = isset($_POST['app_borrar']) ? 1 : 0;
            $pagar = isset($_POST['pagar']) ? 1 : 0;
            $cancelar = isset($_POST['cancelar']) ? 1 : 0;
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $usuario->setUsername($_POST["username"]);
            $usuario->setPermisoCrear($app_crear);
            $usuario->setPermisoModificar($app_modificar);
            $usuario->setPermisoConsulta($app_consultar);
            $usuario->setPermisoBorrar($app_borrar);
            $usuario->setPermisoPagar($pagar);
            $usuario->setPermisoCancelar($cancelar);
            $usuario->setIsAdmin($_POST["isAdmin"]);
            //$usuario->setEmpresa($_POST["empresa"]);
            $tempEmp=$_POST["empresa"];
            $stringEmp="";
            for ($i=0;$i<count($tempEmp);$i++) {$stringEmp .=$tempEmp[$i].",";}
            $stringEmp=substr($stringEmp,0,-1); 
            $usuario->setEmpresa($stringEmp);
            $usuario->setPermisoPagar($pagar);
            $usuario->setPermisoCancelar($cancelar);
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $app_crear = isset($_POST['app_crear']) ? 1 : 0;
            $app_modificar = isset($_POST['app_modificar']) ? 1 : 0;
            $app_consultar = isset($_POST['app_consultar']) ? 1 : 0;
            $app_borrar = isset($_POST['app_borrar']) ? 1 : 0;
            $pagar = isset($_POST['pagar']) ? 1 : 0;
            $cancelar = isset($_POST['cancelar']) ? 1 : 0;
            $usuario=new Usuario($this->adapter);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setUsername($_POST["username"]);
            $usuario->setPermisoCrear($app_crear);
            $usuario->setPermisoModificar($app_modificar);
            $usuario->setPermisoConsulta($app_consultar);
            $usuario->setPermisoBorrar($app_borrar);
            $usuario->setPermisoPagar($pagar);
            $usuario->setPermisoCancelar($cancelar);
            $usuario->setIsAdmin($_POST["isAdmin"]);
            //$usuario->setEmpresa($_POST["empresa"]);
            $tempEmp=$_POST["empresa"];
            $stringEmp="";
            for ($i=0;$i<count($tempEmp);$i++) {$stringEmp .=$tempEmp[$i].",";}
            $stringEmp=substr($stringEmp,0,-1); 
            $usuario->setEmpresa($stringEmp);
           
            $usuario->update($id);
        }
        $this->redirect("Usuarios", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario($this->adapter);
            $usuario->deleteById($id); 
        }
        $this->redirect();
    }
    
    
    public function hola(){
        $usuarios=new UsuariosModel($this->adapter);
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

}
?>
