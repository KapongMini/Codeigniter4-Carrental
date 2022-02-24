<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Libraries\Hash;
use App\Models\VehiclesModel;

class Change_password extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $testimonial = new TestimonialModel();
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
        return view('update_password',$data);
    }

    public function change()
    {
        $usermodel = new UserModel();
        $loggedUserID = session()->get('loggedUser');
        $userdata = $usermodel->find($loggedUserID);
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
            return view('update_password',['validation'=>$this->validator,'userdata'=>$userdata]);
            
            // return redirect()->to('/')->with('fail','something went wrong')
            // ->with('fail_icon','warning');
        }
        else{
            $password = $this->request->getPost('password');
            $newpassword = $this->request->getPost('newpassword');
            $id = session()->get('loggedUser');
            $usermodel = new UserModel();
            $user_info = $usermodel->where('id',$id)->first();
            $check_password = Hash::check($password,$user_info['Password']);

            if(!$check_password){
                session()->setFlashdata('faills','ລະຫັດຜ່ານເກົ່າບໍ່ຖືກຕ້ອງ');
                return redirect()->to('Change_password')->withInput();
            }
            else{
                
                $value =[
                    'Password'=>Hash::make($newpassword)
                ];
                $id = session()->get('loggedUser');
               $updatepassword = new UserModel();
               $query = $updatepassword->update($id,$value);
               if(!$query){
                return redirect()->to('Change_password')->with('failll','ບໍ່ສາມາດປ່ຽນໄດ້ ຜີດພາດທາງດ້ານຖານຂໍ້ມູນ');

               }else{
                return redirect()->to('Change_password')->with('yes','ທ່ານໄດ້ປ່ຽນລະຫັດສຳເລັດແລ້ວ');
               }

                // echo "login success";
            }

        }
    }
  
}
