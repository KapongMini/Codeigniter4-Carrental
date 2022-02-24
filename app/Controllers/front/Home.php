<?php

namespace App\Controllers\front;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\Hash;
use App\Models\SubModel;
use App\Models\TestimonialModel;
use App\Models\VehiclesModel;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        $status=1;
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $testimonial = new TestimonialModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $showtest = $testimonial->showtesti($status);
        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            'vehicles' =>$vehicles,
            'showtest'=>$showtest
        ];
        return view('home',$data);
    }
   
    public function adduser()
    {
        $status=1;
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $testimonial = new TestimonialModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        $vehicles = $Vehiclesmodel->showhome();
        $showtest = $testimonial->showtesti($status);
        $userdata = $usermodel->find($loggedUserID);
        $validation = $this->validate([
            'fullname' => [
                'rules' =>'required',
                'errors' =>[
                    'required' => 'ຕ້ອງໃສ່ຊື່ເຕັມຂອງເຈົ້າ!'

                ]
                ],
            'mobileno' => [
                    'rules' =>'required',
                    'errors' =>[
                        'required' => 'ຕ້ອງໃສ່ເບີໂທຂອງທ່ານ.'
    
                    ]
                    ],
            'Emailld' =>[
                'rules' => 'required|valid_email|is_unique[tblusers.Emailld]',
                'errors' =>[
                    'required' => 'ຕ້ອງການອີເມວ',
                    'valid_email' => 'ທ່ານຕ້ອງໃສ່ອີເມວທີ່ຖືກຕ້ອງ',
                    'is_unique' => 'ມີຄົນໃຊ້ອີເມວໄປກ່ອນແລ້ວ'

                ]
                ],
            'password' =>[
                'rules' =>'required|min_length[5]|max_length[12]',
                'errors' =>[
                    'required' => 'ຕ້ອງການລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' => 'ລະຫັດຜ່ານຈະຕ້ອງບໍ່ມີຕົວອັກສອນຫຼາຍກວ່າ 12 ໂຕ'
                ]
                ],
            'confirmpassword' =>[
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' =>[
                    'required' => 'ຕ້ອງການລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' => 'ລະຫັດຜ່ານຈະຕ້ອງບໍ່ມີຕົວອັກສອນຫຼາຍກວ່າ 12 ໂຕ',
                    'matches' => 'ຢືນຢັນລະຫັດຜ່ານບໍ່ກົງກັບລະຫັດຜ່ານ'
                ]
                ],


        ]);
        if(!$validation){
           
           
            session()->setFlashdata('fail','ມີບາງຢ່າງຜິດພາດ');
            session()->setFlashdata('fail_text','ກວດສອບວ່າໃສ່ຂໍ້ມູນຄົບຖ້ວນແລ້ວບໍ່');
            session()->setFlashdata('fail_icon','warning');
            return view('home',['validation'=>$this->validator,'vehicles' =>$vehicles,'userdata' =>$userdata, 'showtest'=>$showtest]);
            
            // return redirect()->to('/')->with('fail','something went wrong')
            // ->with('fail_icon','warning');
            
            
           
            

        }else{
            //save to db
            $fullname = $this->request->getPost('fullname');
            $mobile = $this->request->getPost('mobileno');
            $email = $this->request->getPost('Emailld');
            $password = $this->request->getPost('password');

            $values = [
                'FullName'=>$fullname,
                'ContactNo'=>$mobile,
                'Emailld'=>$email,
                // 'Password'=>$password
                'Password'=>Hash::make($password)
            ];

            $usermodel = new UserModel();
            $query = $usermodel->insert($values);
            if(!$query){
                session()->setFlashdata('fail_text','ຂໍ້ມູນບໍ່ໄດ້ຖືກບັນທຶກໄປຍັງຖານຂໍ້ມູນ');
                return redirect()->to('/')->with('fail','ມີບາງຢ່າງຜິດພາດ')
                ->with('fail_icon','warning');
                // return redirect()->to('register')->with('fail','something went wrong');
            }else{
                session()->setFlashdata('success_text','ທ່ານສາມາດເຂົ້າສູ່ລະບົບໄດ້ເລີຍ.');
                return redirect()->to('/')->with('success','ລົງທະບຽນສຳເລັດແລ້ວ')
                ->with('success_icon','success');
                // $last_id = $usermodel->insertID(); //this is last insert
                // session()->set('loggedAdmin',$last_id);
                // return redirect()->to('/dashboard');
            }
        }
        

        
    }

    public function checkuser2()
    {
        $status=1;
        $usermodel = new UserModel();
        $testimonial = new TestimonialModel();
        $Vehiclesmodel= new VehiclesModel();
        $loggedUserID = session()->get('loggedUser');
        // $data['userinfo'] = $usermodel->findAll();
        // $data['userdata'] = $usermodel->Userdata($loggedUserID);
        $vehicles = $Vehiclesmodel->showhome();
        $userdata = $usermodel->find($loggedUserID);
        $showtest = $testimonial->showtesti($status);
        
         //let's start validate
         $validation = $this->validate([
            'Emailld' => [
                'rules' =>'required|valid_email|is_not_unique[tblusers.Emailld]',
                'errors' =>[
                    'required' =>'ຕ້ອງການອີເມວ',
                    'valid_email' => 'ໃສ່ທີ່ຢູ່ອີເມວທີ່ຖືກຕ້ອງ',
                    'is_not_unique'=>'ອີເມວນີ້ບໍ່ໄດ້ລົງທະບຽນຢູ່ໃນການບໍລິການຂອງພວກເຮົາ'
                ]
                ],
           
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required' => 'ຕ້ອງມີລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' =>'ລະຫັດຜ່ານຈະຕ້ອງມີຄວາມຍາວບໍ່ເກີນ 12 ຕົວ'
                ]
            ]
        ]);
      
        
        if(!$validation){
            session()->setFlashdata('fail','ເຂົ້າສູ່ລະບົບລົ້ມເຫລວ');
            session()->setFlashdata('fail_text','ກວດສອບວ່າຂໍ້ມູນຖືກຕ້ອງແລ້ວຫຼືບໍ');
            session()->setFlashdata('fail_icon','warning');
         return view('home',['validation'=>$this->validator,'vehicles' =>$vehicles,'userdata' =>$userdata,'showtest'=>$showtest]);
        

        }
        else{
           
            $email = $this->request->getPost('Emailld');
            $password = $this->request->getPost('password');
            $usermodel = new UserModel();
            $user_info = $usermodel->where('Emailld',$email)->first();
            $check_password = Hash::check($password,$user_info['Password']);

            if(!$check_password){
                session()->setFlashdata('fail','ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ');
                return redirect()->to('/')->withInput();
            }
            else{
                
                $user_id = $user_info['id'];
                session()->set('loggedUser',$user_id);
                
                return redirect()->back()->with('success','ເຂົ້າ​ສູ່​ລະ​ບົບ​ສໍາ​ເລັດ​')->with('success_icon','success');;
                // echo "login success";
            }
            

         }
    }
    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/?access=out')->with('fail','ທ່ານອອກຈາກລະບົບແລ້ວ!');
        }
    }

    public function sub()
    {

        $validation = $this->validate([
        
            'subscriberemail' =>[
                'rules' => 'required|valid_email|is_unique[tblsubscribers.SubscriberEmail]',
                'errors' =>[
                    'required' => 'ຕ້ອງໃສ່ອີເມວ',
                    'valid_email' => 'ທ່ານຕ້ອງໃສ່ອີເມວທີ່ຖືກຕ້ອງ',
                    'is_unique' => 'ອີເມວນີ້ຖືກໃຊ້ງານແລ້ວ'

                ]
                ],
           

        ]);
   

        if(!$validation)
        {
            session()->setFlashdata('fail_text','ກວດສອບຄວາມຖືກຕ້ອງ');
            return redirect()->back()->with('fail','ມີບັນຊີຢູ່ແລ້ວ ຫຼື ທ່ານໃສ່ອີເມວຜິດ')->with('fail_icon','warning');;
           
         }else
        {
            
            $subscriberemail = $this->request->getpost('subscriberemail');
            $value =[
                'SubscriberEmail'=>$subscriberemail
            ];
            $Submodel = new SubModel();
            $query = $Submodel->insert($value);
            if(!$query){
                session()->setFlashdata('fail_text','ຕິດຕາມລົ້ມເຫລວ');
                return redirect()->back()->with('fail','ມີບາງຢ່າງຜິດພາດ')
                ->with('fail_icon','warning');
               
            }else{
                session()->setFlashdata('success_text','ທ່ານ​ເປັນ​ສະ​ມາ​ຊິກ​');
                return redirect()->back()->with('success','ສະໝັກໄດ້ສຳເລັດແລ້ວ')
                ->with('success_icon','success');
               
            }
            
            
        }
    }

    public function forgot()
    {
      echo "kuy";
    }

 
}
