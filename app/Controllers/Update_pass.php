<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Libraries\Hash;


use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\ContactusQueryModel;
use App\Models\SubModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Update_pass extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $adminModel = new Adminmodel();
        $contuser = new UserModel();
        $coutvehicle = new VehiclesModel();
        $countbooking = new BookingModel();
        $contbrand = new brandsModel();
        $countsub = new SubModel();
        $countcontact = new ContactusQueryModel();
        $testimonial = new TestimonialModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $usercount = $contuser->countUser();
        $vehiclecount = $coutvehicle->countrow();
        $bookingcount = $countbooking->countbooking();
        $brandcount = $contbrand->countbrand();
        $subcount = $countsub->countsub();
        $contact = $countcontact->countcontactquery();
        $counttest = $testimonial->counttesttimonial();
        $data = [
            'tital' => 'Change Password',
            'adminInfo' =>$adminInfo,
            'usercount'=>$usercount,
            'vehiclecount'=>$vehiclecount,
            'bookingcount'=>$bookingcount,
            'brandcount'=>$brandcount,
            'subcount'=>$subcount,
            'contact' =>$contact,
            'counttest'=>$counttest

        ];
        
        return view('dashboard/change_password',$data);
    }

    public function update() 
    {
        $adminModel = new Adminmodel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        
        $validation = $this->validate([
           
            'newpassword' =>[
                'rules' =>'required|min_length[5]|max_length[12]',
                'errors' =>[
                    'required' => 'ຕ້ອງການລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' => 'ລະຫັດຜ່ານຈະຕ້ອງບໍ່ມີຕົວອັກສອນຫຼາຍກວ່າ 12 ໂຕ'
                ]
                ],
            'confirmpassword' =>[
                'rules' => 'required|min_length[5]|max_length[12]|matches[newpassword]',
                'errors' =>[
                    'required' => 'ຕ້ອງການລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' => 'ລະຫັດຜ່ານຈະຕ້ອງບໍ່ມີຕົວອັກສອນຫຼາຍກວ່າ 12 ໂຕ',
                    'matches' => 'ຢືນຢັນລະຫັດຜ່ານບໍ່ກົງກັບລະຫັດຜ່ານ'
                ]
                ],


        ]);
        if(!$validation){
           
           
            session()->setFlashdata('faill','ມີບາງຢ່າງຜິດພາດ');
            session()->setFlashdata('faill_text','ກວດສອບວ່າໃສ່ຂໍ້ມູນຄົບຖ້ວນແລ້ວບໍ່');
            session()->setFlashdata('faill_icon','warning');
            return view('dashboard/change_password',['validation'=>$this->validator,'adminInfo' =>$adminInfo]);
            
            // return redirect()->to('/')->with('fail','something went wrong')
            // ->with('fail_icon','warning');
        }
        else{
            $password = $this->request->getPost('password');
            $newpassword = $this->request->getPost('newpassword');
            $id = session()->get('loggedAdmin');
            $adminModel = new Adminmodel();
            $admin_info = $adminModel->where('id',$id)->first();
            $check_password = Hash::check($password,$admin_info['password']);

            if(!$check_password){
                session()->setFlashdata('faills','ລະຫັດຜ່ານເກົ່າບໍ່ຖືກຕ້ອງ');
                return redirect()->to('dashboard/update_password')->withInput();
            }
            else{
                
                $value =[
                    'password'=>Hash::make($newpassword)
                ];
                $id = session()->get('loggedAdmin');
                $adminModel = new Adminmodel();
               $query = $adminModel->update($id,$value);
               if(!$query){
                return redirect()->to('dashboard/update_password')->with('failll','ບໍ່ສາມາດປ່ຽນໄດ້ ຜີດພາດທາງດ້ານຖານຂໍ້ມູນ');

               }else{
                return redirect()->to('dashboard/update_password')->with('yes','ທ່ານໄດ້ປ່ຽນລະຫັດສຳເລັດແລ້ວ');
               }

                // echo "login success";
            }

        }
    }
}