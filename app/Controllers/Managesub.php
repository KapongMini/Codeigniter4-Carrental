<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\ContactusQueryModel;
use App\Models\SubModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Managesub extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $sub = new SubModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $result = $sub->managesub();
        
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo,
            'result'=>$result

            
            
            
        ];
        return view('dashboard/manage_subscribers',$data);
    }
   public function delete($id)
   {
    $sub = new SubModel();
    $sub->delete($id);
    // return $this->response->redirect(site_url('dashboard/manage_brands'));
    return redirect()->back()->with('delete','ລຶບສຳເລັດແລ້ວ');
   }
}