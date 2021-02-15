<?php
class PersonaController extends ControladorBase
{
    private $conectar;
    private $adapter;

    /**
     * PersonaController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
    }
    public function index(){

        //Creamos el objeto usuario
        $usuario=new Persona($this->adapter);

        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();

        //Producto


        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){

            //Creamos un usuario
            $persona=new Persona();
            $persona->id = $_POST['dni'];
            $persona->nombre = $_POST["nombre"];

            $persona->edad = (int)$_POST["edad"];
            $save=$persona->save();
        }
        $this->redirect("Usuarios", "index");
    }
    public function add(Persona $persona)
    {
        $query = "insert into personas (id,nombre,edad) values ($persona->id, $persona->nombre, $persona->edad)";
        $this->adapter->prepare($query)->execute();
    }

}