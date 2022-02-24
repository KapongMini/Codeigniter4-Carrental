<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\ContactusQueryModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Contactquery extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $contactq = new ContactusQueryModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $contactqinfo = $contactq->managecontactquery();
        
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo,
            'contactqinfo'=>$contactqinfo
            
            
        ];
        return view('dashboard/manage_conactusquery',$data);
    }
    public function pending($id)
    {
        $status=1;
        $contactq = new ContactusQueryModel();
        $query = $contactq->upstatus($id,$status);
        if(!$query){
            return redirect()->to('dashboard/manage_contactquery')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }
        else
        {
         return redirect()->to('dashboard/manage_contactquery')->with('success','ທ່ານໄດ້ກົດອ່ານແລ້ວ');
        }
    }
}