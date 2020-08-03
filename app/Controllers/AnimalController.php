<?php namespace App\Controllers;

use App\Models\AnimalModel;

class AnimalController extends BaseController {
    
    
    public function index() {

      $animalModelo= new AnimalModel();

      $datosBuscados=$animalModelo->asObject()->findAll();

      $datosParaLaVista=array('animales'=>$datosBuscados);

     return view('vistaAnimal',$datosParaLaVista);
      
    }

    public function crear() {

      $animalModelo= new AnimalModel();

      $nombre=$this->request->getPost('nombre');
      $comida=$this->request->getPost('comida');
      $edad=$this->request->getPost('edad');


      $animalModelo->save([
        'nombre'=>$nombre,
        'comida'=>$comida,
        'edad'=>$edad
      ]);

      return redirect()->to(base_url('public/animales'))->with('mensaje',"Animal creado con éxito!");
      

    }

  
    

	//--------------------------------------------------------------------


}

