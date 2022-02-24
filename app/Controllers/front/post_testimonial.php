<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class post_testimonial extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        // $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            // 'vehicles' =>$vehicles
        ];
        return view('post_testimonial',$data);
    }

    public function save()
    {
        $posttest = $this->request->getPost('testimonial');
        $loggedUserID = session()->get('loggedUser');
        $value =[
            'Testimonial' =>$posttest,
            'UserEmail' =>$loggedUserID

        ];
        $posttestiminial = new TestimonialModel();
        $query = $posttestiminial->insert($value);
        if(!$query){
            return redirect()->back()->with('faill','ມີບາງຢ່າງຜິດພາດ');

        }
        else
        {
            return redirect()->back()->with('successs','ໂພສສຳເລັດແລ້ວ...');
        }
    }
    
}
