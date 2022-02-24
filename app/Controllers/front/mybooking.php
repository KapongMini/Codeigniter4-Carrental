<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class mybooking extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $bookingmodel = new BookingModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        // $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $result = $bookingmodel->mybooking($loggedUserID);

        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            'result'=>$result,
            // 'vehicles' =>$vehicles
        ];
        return view('my_booking',$data);
    }
  
}
