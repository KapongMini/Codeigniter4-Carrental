<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Profile_setting extends BaseController
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
        return view('profile',$data);
    }
     public function update()
     {
        $id = session()->get('loggedUser');
        // $id = $this->request->getPost('id');
        $fullname = $this->request->getPost('fullname');
        $ContactNo = $this->request->getPost('mobilenumber');
        $email = $this->request->getPost('Emailld');

        $dob = $this->request->getPost('dob');
        $address = $this->request->getPost('address');
        $country = $this->request->getPost('country');
        $city = $this->request->getPost('city');
        

        $values = [
            'FullName'=>$fullname,
            'ContactNo'=>$ContactNo,
            'Emailld'=>$email,

            'dob'=>$dob,
            'Address'=>$address,
            'Country'=>$country,
            'City'=>$city,
            

            
        ];

        $usermodel = new UserModel();
        $query = $usermodel->setupdate($id,$fullname,$email,$ContactNo,$dob,$address,$country,$city);
        if(!$query){
            session()->setFlashdata('fail_text','ບັນຊີຂອງຍັງມີການປ່ຽນແປງ');
            return redirect()->back()->with('faill','ມີບາງຢ່າງຜິດພາດ')
            ->with('fail_icon','warning');
            // return redirect()->to('register')->with('fail','something went wrong');
        }else{
            session()->setFlashdata('success_text','ບັນຊີຂອງທ່ານໄດ້ມີການປ່ຽນແປງ');
            return redirect()->back()->with('successs','ອັບເດດສຳເລັດແລ້ວ')
            ->with('success_icon','success');
            // $last_id = $usermodel->insertID(); //this is last insert
            // session()->set('loggedAdmin',$last_id);
            // return redirect()->to('/dashboard');
        }
     }
}
