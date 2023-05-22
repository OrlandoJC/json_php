<?php

//ESTE ARCHIVO DE PHP ES EL QUE VA HACER QUE SE MUESTREN LOS DATOSs
class VehiculosController
{
    public function __construct()
    {
        require_once "models/Vehiculosmodel.php";
    }

    public function index()
    {
        //Esto lo que hace es traer todos los datos que estan en la tabla vehiculos
        require_once "models/Vehiculosmodel.php";

        //Objeto para tener comunicacion con la clase Vehiculos_model
        $vehiculos = new Vehiculos_model();

        //Titulo que se va a mostrar en la pagina
        $data["titulo"] ="Vehiculos";

        //Mostrar tabla
        $data["vehiculos"] = $vehiculos->get_vehiculos();

        //Esto hace como copiar literal lo que esta en el archivo vehiculos.php y pegarlo aqui
        require_once "views/vehiculos/vehiculos.php";
    }

    //Este metodo hace la vista del formulario
    public function nuevo()
    {
        $data["titulo"] ="Vehiculos";

        //Aqui se encuentra el formulario
        require_once "views/vehiculos/vehiculos_nuevo.php";
    }


    public function guarda()
    {

        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];

        $vehiculos = new Vehiculos_model();
        $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);

        $data["titulo"] = "Vehiculos";

        $this->index();
    }

    public function modificar($id)
    {
        $vehiculos = new Vehiculos_model();

        $data["id"] = $id;
        $data["vehiculos"] = $vehiculos->get_vehiculo($id);
        $data["titulo"] ="Vehiculos";

        //Aqui se encuentra el formulario
        require_once "views/vehiculos/vehiculos_modifica.php";
    }

    public function actualizar()
    {

        $id = $_POST['id'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $anio = $_POST['anio'];
        $color = $_POST['color'];

        $vehiculos = new Vehiculos_model();
        $vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);

        $data["titulo"] = "Vehiculos";

        $this->index();
    }

    public function eliminar($id)
    {
        $vehiculos = new Vehiculos_model();
        $vehiculos->eliminar($id);

        $data["titulo"] = "Vehiculos";

        $this->index();
    }
}

?>
