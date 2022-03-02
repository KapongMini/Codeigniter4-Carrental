<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\brandsModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;
use CodeIgniter\Controller;


class Car_listing extends Controller
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $brandmodel = new brandsModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        
        $vehicles = $Vehiclesmodel->countrow();

        // $results = $Vehiclesmodel->findCar();
        // $Vehiclesmodel->findCar();
        
        $findbrand = $brandmodel->showbrand();
        $findcar2 = $Vehiclesmodel->findCar2();
        
        $userdata = $usermodel->find($loggedUserID);
        
        $data = [
            'tital' => 'Car Listing',
            'userdata' =>$userdata,
            'vehicles' =>$vehicles,
            'results'=>$Vehiclesmodel->paginateNews(3, 'carlist'),
            'findbrand'=>$findbrand,
            'findcar2'=>$findcar2,
            'pager' => $Vehiclesmodel->pager,
           
            
            
        ];
        
        return view('carlisting',$data);
    }

    public function search()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $brandmodel = new brandsModel();

        $brand=$this->request->getPost('brand');
        $fueltype=$this->request->getPost('fueltype');
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        
        $vehicles = $Vehiclesmodel->countrow_search($brand,$fueltype);
        $results = $Vehiclesmodel->findCar3($brand,$fueltype);
        $findbrand = $brandmodel->showbrand();
        $findcar2 = $Vehiclesmodel->findCar2();
        
        $userdata = $usermodel->find($loggedUserID);
        $data = [
            'tital' => 'Car Listing',
            'userdata' =>$userdata,
            'vehicles' =>$vehicles,
            'results'=>$results,
            'findbrand'=>$findbrand,
            'findcar2'=>$findcar2
        ];
       return view('search',$data);
    }
}
