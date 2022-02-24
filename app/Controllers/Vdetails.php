<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Controllers;
use App\Models\BookingModel;
use App\Models\VehiclesModel;
use CodeIgniter\Controller;

class Vdetails extends BaseController
{
    
    public function __construct()
    {
        
        helper(['url','form']);
    }
    public function index($id_vehicle)
    {
        
        $usermodel = new UserModel();
        $Vehiclesmodel= new VehiclesModel();
        $loggedUserID = session()->get('loggedUser');
        
        $vehicles = $Vehiclesmodel->vdetails($id_vehicle);
        $similar = $Vehiclesmodel->similar($id_vehicle);
        $userdata = $usermodel->find($loggedUserID);
        $data = [
            'tital' => 'home',
            'userdata' =>$userdata,
            'vehicles' =>$vehicles,
            'similar'=>$similar
        ];
        return view('vehicle_details',$data);
    }

    public function savebook() 
    {
        $Vehiclesmodel= new VehiclesModel();
        $userid = session()->get('loggedUser');
        $id_vehicle = $this->request->getpost('id_vehicle');
        $formdate = $this->request->getpost('fromdate');
        $todate = $this->request->getpost('todate');
        $message = $this->request->getpost('message');
        $status = $this->request->getpost('status');

        $data=[
            'userEmail' =>$userid,
            'VehicleId' =>$id_vehicle,
            'FromDate' =>$formdate,
            'ToDate' =>$todate,
            'message' =>$message,
            'Status' =>$status,
        ];
        $bookingmodel = new BookingModel();
        $query = $bookingmodel->insert($data);
        if(!$query){
            session()->setFlashdata('fail_text','ຄວາມ​ຜິດ​ພາດ​ຂອງ​ທ່ານ​');
            return redirect()->back()->with('fail','ມີບາງຢ່າງຜິດພາດ')
            ->with('fail_icon','warning');
            // return redirect()->to('register')->with('fail','something went wrong');
        }else{
            session()->setFlashdata('success_text','ຈະມີການກວດແລ້ວຢືນຢັນໄວໆນີ້.');
            return redirect()->back()->with('success','ການຈອງສຳເລັດແລ້ວ')
            ->with('success_icon','success');
        }
    }
}