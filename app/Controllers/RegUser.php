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

class RegUser extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $user = new UserModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $result = $user->manageusers();
        
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo,
            'result'=>$result

            
            
            
        ];
        return view('dashboard/reg_users',$data);
    }
   public function delete($id)
   {
    $user = new UserModel();
    $user->delete($id);
    // return $this->response->redirect(site_url('dashboard/manage_brands'));
    return redirect()->to('dashboard/reg_users')->with('delete','ທ່ານໄດ້ທຳການລຶບສໍາເລັດແລ້ວ');
   }
}