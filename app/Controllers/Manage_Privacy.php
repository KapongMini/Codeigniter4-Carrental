<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\ContactusQueryModel;
use App\Models\PageModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Manage_Privacy extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $page = new PageModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $result = $page->findprivacy();
        
        $data = [
            'tital' => 'Privacy Policy',
            'adminInfo' =>$adminInfo,
            'result'=>$result
            

            
            
            
        ];
        return view('dashboard/manage_privacy',$data);
    }
    public function update_privacy()
    {
        $id = $this->request->getPost('id');
        $pagedetails = $this->request->getPost('pgedetails');
        $page = new PageModel();
        $query = $page->pageupdate($id,$pagedetails);
        if(!$query){
            return redirect()->to('dashboard/manage_privacy')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }
        else
        {
         return redirect()->to('dashboard/manage_privacy')->with('success','ອັບເດດສຳເລັດແລ້ວ ');
        }

        
    }
   
}