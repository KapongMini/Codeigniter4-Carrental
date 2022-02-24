<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Libraries\Hash;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['url','form']);
    }
    public function index()
    {
        return view('admin/login');
    }
    public function register(){
        return view('admin/register');
    }
    public function save(){
        // let's validation

        // $validation = $this->validate([
        //     'username'=>'required',
        //     'email'=>'required|valid_email|is_unique[admin.email]',
        //     'password'=>'required|min_length[5]|max_length[12]',
        //     'cfpassword' => 'required|min_length[5]|max_length[12]|matches[password]'
        // ]);

        $validation = $this->validate([
            'username' => [
                'rules' =>'required',
                'errors' =>[
                    'required' => 'your full name is required'

                ]
                ],
            'email' =>[
                'rules' => 'required|valid_email|is_unique[admin.email]',
                'errors' =>[
                    'required' => 'Email is required',
                    'valid_email' => 'your must enter a valid email',
                    'is_unique' => 'Email already taken'

                ]
                ],
            'password' =>[
                'rules' =>'required|min_length[5]|max_length[12]',
                'errors' =>[
                    'required' => 'password is required',
                    'min_length' => 'password must have atleast 5 characters in length',
                    'max_length' => 'password must not have characters more than 12 in length'
                ]
                ],
            'cfpassword' =>[
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' =>[
                    'required' => 'password is required',
                    'min_length' => 'password must have atleast 5 characters in length',
                    'max_length' => 'password must not have characters more than 12 in length',
                    'matches' => 'Confirm password not matches to password'
                ]
            ]


        ]);

        if(!$validation){
            return view('admin/register',['validation'=>$this->validator]);

        }else{
            //save to db
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'username'=>$username,
                'email'=>$email,
                'password'=>Hash::make($password)
            ];

            $adminmodel = new Adminmodel();
            $query = $adminmodel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','something went wrong');
                // return redirect()->to('register')->with('fail','something went wrong');
            }else{
                // return redirect()->to('admin/register')->with('success','You are now registered successfuly');
                $last_id = $adminmodel->insertID(); //this is last insert
                session()->set('loggedAdmin',$last_id);
                return redirect()->to('/dashboard');
            }

        }

    }

    public function check(){
        //let's start validate
        $validation = $this->validate([
            'email' => [
                'rules' =>'required|valid_email|is_not_unique[admin.email]',
                'errors' =>[
                    'required' =>'ກະລຸນາໃສ່ອີເມວ',
                    'valid_email' => 'ໃສ່ທີ່ຢູ່ອີເມວທີ່ຖືກຕ້ອງ',
                    'is_not_unique'=>'ອີເມວນີ້ບໍ່ໄດ້ລົງທະບຽນຢູ່ໃນການບໍລິການຂອງພວກເຮົາ'
                ]
                ],
           
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required' => 'ຕ້ອງໃສ່ລະຫັດຜ່ານ',
                    'min_length' => 'ລະຫັດຜ່ານຕ້ອງມີຄວາມຍາວຢ່າງໜ້ອຍ 5 ຕົວ',
                    'max_length' =>'ລະຫັດຜ່ານຈະຕ້ອງມີຄວາມຍາວບໍ່ເກີນ 12 ຕົວ'
                ]
            ]
        ]);
        if(!$validation){
            return view('admin/login',['validation'=>$this->validator]);

        }else{
            //let's check admin
            
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $adminmodel = new Adminmodel();
            $admin_info = $adminmodel->where('email',$email)->first();

            $check_password = Hash::check($password,$admin_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail','ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ');
                return redirect()->to('/admin')->withInput();
            }else{
                $admin_id = $admin_info['id'];
                session()->set('loggedAdmin',$admin_id);
                return redirect()->to('/dashboard');
            }

        }
    }
    public function logout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('/admin?access=out')->with('fail','ເຈົ້າອອກຈາກລະບົບແລ້ວ!');
        }
    }
}