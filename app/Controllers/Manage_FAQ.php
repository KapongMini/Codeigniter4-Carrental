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

class Manage_FAQ extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
       $page = new PageModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $result = $page->findfaq();
        
        $data = [
            'tital' => 'faq',
            'adminInfo' =>$adminInfo,
            'result'=>$result
            

            
            
            
        ];
        return view('dashboard/manage_faq',$data);
    }
    public function update_faq()
    {
        $id = $this->request->getPost('id');
        $pagedetails = $this->request->getPost('pgedetails');
        $page = new PageModel();
        $query = $page->pageupdate($id,$pagedetails);
        if(!$query){
            return redirect()->to('dashboard/manage_faq')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }
        else
        {
         return redirect()->to('dashboard/manage_faq')->with('success','ອັບເດດສຳເລັດແລ້ວ ');
        }

        
    }
   
}