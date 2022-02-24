<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\PageModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Page_FAQ extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        
        
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $page = new PageModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        // $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $result = $page->findfaq();
        $data = [
            'tital' => 'Frequently Asked Question',
            'userdata' =>$userdata,
         'result'=> $result,
            // 'vehicles' =>$vehicles
        ];
        return view('faq_page',$data);
    }
 
}
