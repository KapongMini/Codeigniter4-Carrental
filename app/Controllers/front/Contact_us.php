<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\contactusinfo;
use App\Models\contactusinfoModel;
use App\Models\ContactusQuery;
use App\Models\ContactusQueryModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Contact_us extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $info = new contactusinfoModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        // $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $contactinfo = $info->showinfo();
        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            'contactinfo'=>$contactinfo,
            // 'vehicles' =>$vehicles
        ];
        return view('contact_us',$data);
    }
    
    public function sent()
    {
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $contactno = $this->request->getPost('contactno');
        $message = $this->request->getPost('message');

        $data =
        [
            'name'=>$fullname,
            'EmailId'=>$email,
            'ContactNumber'=>$contactno,
            'Message'=>$message
        ];
        $contactmodel = new ContactusQueryModel();
        $query = $contactmodel->insert($data);
        if(!$query)
        {
            return redirect()->back()->with('failll','ມີບາງຢ່າງຜິດພາດ');
        }else
        {
            return redirect()->back()->with('successss','ສົ່ງຄຳຖາມແລ້ວ. ພວກເຮົາຈະຕິດຕໍ່ຫາທ່ານໃນໄວໆນີ້');
        }

    }
}
