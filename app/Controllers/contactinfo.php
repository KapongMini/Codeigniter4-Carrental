<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\contactusinfoModel;
use App\Models\ContactusQueryModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class contactinfo extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $contact = new contactusinfoModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $contactinfo = $contact->showinfo();
        
        
        $data = [
            'tital' => 'contactinfo',
            'adminInfo' =>$adminInfo,
            'contactinfo'=>$contactinfo
           

            
            
            
        ];
        return view('dashboard/update_contactinfo',$data);
    }
  public function update(){
      $id = $this->request->getPost('id');
      $Address = $this->request->getPost('address');
      $Email = $this->request->getPost('email');
      $ContactNo = $this->request->getPost('contactno');

      $contactinfo = new contactusinfoModel();
      $query = $contactinfo->setupdate($id,$Address,$Email,$ContactNo);
      if(!$query){
        // session()->setFlashdata('fail_text','your are not customer');
        return redirect()->to('dashboard/update_contactinfo')->with('faill','ມີບາງຢ່າງຜິດພາດ')
        ->with('fail_icon','warning');
        // return redirect()->to('register')->with('fail','something went wrong');
    }else{
        session()->setFlashdata('success_text','your are customer');
        return redirect()->to('dashboard/update_contactinfo')->with('success','ອັບເດດສຳເລັດແລ້ວ')
        ->with('success_icon','success');
        // $last_id = $usermodel->insertID(); //this is last insert
        // session()->set('loggedAdmin',$last_id);
        // return redirect()->to('/dashboard');
    }
  }
}