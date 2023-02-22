<?php namespace App\Controllers;

use App\Models\CrudModel;
class Crud extends BaseController
{
   

    public function index()
    {
        $Crud = new CrudModel();
        $datos =$Crud->listarNombres();

        $data=[
            "datos"=>$datos
        ];
        return view('listado',$data);
    }

    public function crear(){
        $datos=[
            "first_name	"=>$_POST['nombre'],
            "last_name"=>$_POST['apellido'],
            "address"=>$_POST['direccion'],
        ];
        $Crud = new CrudModel();
        $respuesta= $Crud->insertar($datos);
        
        if($respuesta>0)
        {
            return redirect()->to(base_url().'/')->with('mensaje','1');

        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }

    }
    public function actualizar(){
        $datos=[
            "first_name	"=>$_POST['nombre'],
            "last_name"=>$_POST['apellido'],
            "address"=>$_POST['direccion'],
        ];
        $id=$_POST['id'];
        $Crud = new CrudModel();
        $respuesta =$Crud->actualizar($datos,$id);
        if($respuesta>0)
        {
            return redirect()->to(base_url().'/')->with('mensaje','1');

        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }
    public function obtenerNombre($idNombre){
        $data=["id"=>$idNombre];
        $Crud= new CrudModel();
        $respuesta=$Crud->obetnerNombre($data);
        $datos=["datos"=>$respuesta];
        return view('actualizar',$datos);
        
    }
    public function eliminar($idNombre)
    {
        $data=["id"=>$idNombre];
        $Crud= new CrudModel();
        $respuesta=$Crud->eliminar($data);
        if($respuesta>0)
        {
            return redirect()->to(base_url().'/')->with('mensaje','1');

        }else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
       
    }

}
