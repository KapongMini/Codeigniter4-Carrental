<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class manage_booking extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
        $managebooking = new BookingModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $msbooking = $managebooking->managebooking();
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo,
            'msbooking'=>$msbooking
        ];
        return view('dashboard/manage_bookings',$data);
    }

    public function conf($id) 
    {
        $status=1;
       $managebooking = new BookingModel();
       $query = $managebooking->upstatus($id,$status);
       if(!$query){
           return redirect()->to('dashboard/manage_booking')->with('fail','ມີບາງຢ່າງຜິດພາດ');
       }
       else
       {
        return redirect()->to('dashboard/manage_booking')->with('success','ຢືນຢັນສຳເລັດ');
       }
    }
    public function cancel($id) 
    {
        $status=2;
       $managebooking = new BookingModel();
       $query = $managebooking->upstatus($id,$status);
       if(!$query){
           return redirect()->to('dashboard/manage_booking')->with('fail','ມີບາງຢ່າງຜິດພາດ');
       }
       else
       {
        return redirect()->to('dashboard/manage_booking')->with('success','ຍົກເລີກສຳເລັດ');
       }
    }
        
    
}