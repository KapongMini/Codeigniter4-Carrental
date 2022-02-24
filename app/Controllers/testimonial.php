<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class testimonial extends BaseController
{
    public function index()
    {  
        $adminModel = new Adminmodel();
        $managetest = new TestimonialModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $testiminialinfo = $managetest->managetest();
        
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo,
            'testiminialinfo'=>$testiminialinfo
            
        ];
        return view('dashboard/testimonials',$data);
    }
    public function inactive($id)
    {
        $status="0";
        $managetest = new TestimonialModel();
        $query = $managetest->upstatus($id,$status);
        if(!$query){
            return redirect()->to('dashboard/manage_testimonial')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }
        else
        {
         return redirect()->to('dashboard/manage_testimonial')->with('success','Testimonial Inacrive ສໍາເລັດ');
        }
    }
    public function active($id)
    {
        $status=1;
        $managetest = new TestimonialModel();
        $query = $managetest->upstatus($id,$status);
        if(!$query){
            return redirect()->to('dashboard/manage_testimonial')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }
        else
        {
         return redirect()->to('dashboard/manage_testimonial')->with('success','Testimonial Active ສຳເລັດແລ້ວ');
        }
    }
}