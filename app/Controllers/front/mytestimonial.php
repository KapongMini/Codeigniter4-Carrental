<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class mytestimonial extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $testimonial = new TestimonialModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        // $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $results = $testimonial->mytesti($loggedUserID);
        

        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            'results'=>$results,
            
            // 'vehicles' =>$vehicles
        ];
        return view('my_testimonials',$data);
    }
  
}
