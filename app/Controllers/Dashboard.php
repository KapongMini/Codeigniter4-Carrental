<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Models\BookingModel;
use App\Models\brandsModel;
use App\Models\ContactusQueryModel;
use App\Models\SubModel;
use App\Models\TestimonialModel;
use App\Models\UserModel;
use App\Models\VehiclesModel;

class Dashboard extends BaseController
{
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
            'tital' => 'Dashboard',
            'adminInfo' =>$adminInfo,
            'usercount'=>$usercount,
            'vehiclecount'=>$vehiclecount,
            'bookingcount'=>$bookingcount,
            'brandcount'=>$brandcount,
            'subcount'=>$subcount,
            'contact' =>$contact,
            'counttest'=>$counttest

        ];
        return view('dashboard/index',$data);
    }
    public function create_brand(){
        $adminModel = new Adminmodel();
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $data = [
            'tital' => 'Create brand',
            'adminInfo' =>$adminInfo
        ];
        return view('dashboard/create_brand',$data);
    }
    public function addbrands(){
        $addbrands = $this->request->getPost('brand');
        $data=[
            'Brands' => $addbrands,
        ];
        $brandsModel = new brandsModel();
        $query = $brandsModel->save($data);
            if(!$query){
                // return redirect()->back()->with('fail','something went wrong');
                return redirect()->to('dashboard/create_brand')->with('fail','ມີບາງຢ່າງຜິດພາດ');
            }else{
                return redirect()->to('dashboard/create_brand')->with('success','ທ່ານສ້າງຍີ່ຫໍ້ພາຫະນະສໍາເລັດແລ້ວ');
                
            }
    }

    public function manage_brands(){
        $adminModel = new Adminmodel();
        $brandsModel = new brandsModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $brandsInfo = $brandsModel->findAll();
        $data = [
            'tital' => 'manage brands',
            'brandsInfo' =>$brandsInfo
        ];
        return view('dashboard/manage_brands',$data);
    }

    public function edit_brand($id){
        $adminModel = new Adminmodel();
        $brandsModel = new brandsModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $brandsInfo = $brandsModel->find($id);
        $data = [
            'tital' => 'edit_brand',
            'brandsInfo' =>$brandsInfo
        ];
        return view('dashboard/edit_brand',$data);

    }

    public function update_brand($id){
        $brandsModel = new brandsModel();
        
        $data =[
            'Brands' =>$this->request->getPost('brand'),
        ];
        $query = $brandsModel->update($id, $data);
        if(!$query){
            // return redirect()->back()->with('fail','something went wrong');
            return redirect()->to('dashboard/manage_brands')->with('fail','ມີບາງຢ່າງຜິດພາດ');
        }else{
            return redirect()->to('dashboard/manage_brands')->with('success','ທ່ານໄດ້ອັບເດດ ຍີ່ຫໍ້ສຳເລັດແລ້ວ');
            
        }

    }
    public function delete_brand($id){
        $brandsModel = new brandsModel();
        $brandsModel->delete($id);
        // return $this->response->redirect(site_url('dashboard/manage_brands'));
        return redirect()->to('dashboard/manage_brands')->with('delete','ທ່ານໄດ້ທໍາການລົບຍີ່ຫໍ້ສຳເລັດແລ້ວ');

    }




    //post_avehical

    public function post_avehical()
    {
        
        $brandsModel = new brandsModel();
        $adminModel = new Adminmodel();
        $loggedAdminID = session()->get('loggedAdmin');
        $post_avehical = $adminModel->find($loggedAdminID);
        $show_brand = $brandsModel->orderBy('Brands','desc')->findAll();
        $data = [
            'tital' => 'Post_avehical',
            'post_avehical' =>$post_avehical,
            'Brand_name' =>$show_brand
           
        ];
        // $values['Brand_name'] = $brandsModel->orderBy('Brands','ASC')->findAll();
        return view('dashboard/post_avehical',$data);
    }

    //save vehicles
    public function save_vehicles()
    {
        $vehicletitle = $this->request->getPost('vehicletitle');
        $brandname = $this->request->getPost('brandname');
        $vehicalorcview = $this->request->getPost('vehicalorcview');
        $priceperday = $this->request->getPost('priceperday');
        $fueltype = $this->request->getPost('fueltype');
        $modelyear = $this->request->getPost('modelyear');
        $seatingcapacity = $this->request->getPost('seatingcapacity');

        $img1 = $this->request->getFile('img1');
        if($img1->isValid() && !$img1->hasMoved())
        {
            $image1 = $img1->getRandomName();
            $img1->move('back/img/vehicleimages',$image1);
        }

        $img2 = $this->request->getFile('img2');
        if($img2->isValid() && !$img2->hasMoved())
        {
            $image2 = $img2->getRandomName();
            $img2->move('back/img/vehicleimages',$image2);
        }

        $img3 = $this->request->getFile('img3');
        if($img3->isValid() && !$img3->hasMoved())
        {
            $image3 = $img3->getRandomName();
            $img3->move('back/img/vehicleimages',$image3);
        }

        $img4 = $this->request->getFile('img4');
        if($img4->isValid() && !$img4->hasMoved())
        {
            $image4 = $img4->getRandomName();
            $img4->move('back/img/vehicleimages',$image4);
        }

        $img5 = $this->request->getFile('img5');
        if($img5->isValid() && !$img5->hasMoved())
        {
            $image5 = $img5->getRandomName();
            $img5->move('back/img/vehicleimages',$image5);
        }



        $airconditioner = $this->request->getPost('airconditioner');
        $powerdoorlocks = $this->request->getPost('powerdoorlocks');
        $antilockbrakingsys = $this->request->getPost('antilockbrakingsys');
        $brakeassist = $this->request->getPost('brakeassist');
        $powersteering = $this->request->getPost('powersteering');

        $driverairbag = $this->request->getPost('driverairbag');
        $passengerairbag = $this->request->getPost('passengerairbag');
        $powerwindow = $this->request->getPost('powerwindow');
        $cdplayer = $this->request->getPost('cdplayer');
        $centrallocking = $this->request->getPost('centrallocking');
        $crashcensor = $this->request->getPost('crashcensor');

        $leatherseats = $this->request->getPost('leatherseats');
        


        $data=[
            'VehiclesTitle' => $vehicletitle,
            'VehiclesBrand' => $brandname,
            'VehiclesOverview' => $vehicalorcview,
            'PricePerDay' => $priceperday,
            'FuelType' => $fueltype,
            'ModelYear' => $modelyear,
            'SeatingCapacity' => $seatingcapacity,

            'Vimage1' => $image1,
            'Vimage2' => $image2,
            'Vimage3' => $image3,
            'Vimage4' => $image4,
            'Vimage5' => $image5,
           
            'AirConditioner' => $airconditioner,
            'PowerDoorLocks' => $powerdoorlocks,
            'AntiLockBrakingSystem' => $antilockbrakingsys,
            'BrakeAssist' => $brakeassist,
            'PowerSteering' => $powersteering,
            'DriverAirbag' => $driverairbag,
            'PassengerAirbag' => $passengerairbag,
            'PowerWindows' => $powerwindow,

            'CDPlayer' => $cdplayer,
            'CentralLocking' => $centrallocking,
            'CrashSensor' => $crashcensor,
            'LeatherSeats' => $leatherseats,
        ];
        $Vehiclesmodel = new VehiclesModel();
        $query = $Vehiclesmodel->save($data);
            if(!$query){
                // return redirect()->back()->with('fail','something went wrong');
                return redirect()->to('dashboard/post_avehical')->with('fail','ມີບາງຢ່າງຜິດພາດ');
            }else{
                return redirect()->to('dashboard/post_avehical')->with('success','ທ່ານບັນທຶກຍານພາຫະນະສໍາເລັດແລ້ວ');
                
            }
    }




    public function manage_vehicles(){
        $adminModel = new Adminmodel();
        $Vehiclesmodel = new VehiclesModel();
        $loggedAdminID = session()->get('loggedAdmin');
        $vehicles = $Vehiclesmodel->getAll();
        $data = [
            'tital' => 'manage_vehicles',
            'vehicles' =>$vehicles
        ];
        return view('dashboard/manage_vehicles',$data);

    }
    
    
    public function edit_vehicle($id_vehicle)
    {
        $Vehiclesmodel = new VehiclesModel();
        $brand = new brandsModel();
        $vehicless = $Vehiclesmodel->setfind($id_vehicle);
        $results = $brand->showb();
        $data = [
            'tital' => 'edit_brand',
            'sw' =>$vehicless,
            'result' =>$results

        ];
        return view('dashboard/edit_vehicle',$data);
    }

    public function update_vehicle($id_vehicle){
        $vehicletitle = $this->request->getPost('vehicletitle');
        $brandname = $this->request->getPost('brandname');
        $vehicalorcview = $this->request->getPost('vehicalorcview');
        $priceperday = $this->request->getPost('priceperday');
        $fueltype = $this->request->getPost('fueltype');
        $modelyear = $this->request->getPost('modelyear');
        $seatingcapacity = $this->request->getPost('seatingcapacity');

        $airconditioner = $this->request->getPost('airconditioner');
        $powerdoorlocks = $this->request->getPost('powerdoorlocks');
        $antilockbrakingsys = $this->request->getPost('antilockbrakingsys');
        $brakeassist = $this->request->getPost('brakeassist');
        $powersteering = $this->request->getPost('powersteering');

        $driverairbag = $this->request->getPost('driverairbag');
        $passengerairbag = $this->request->getPost('passengerairbag');
        $powerwindow = $this->request->getPost('powerwindow');
        $cdplayer = $this->request->getPost('cdplayer');
        $centrallocking = $this->request->getPost('centrallocking');
        $crashcensor = $this->request->getPost('crashcensor');

        $leatherseats = $this->request->getPost('leatherseats');
        


        $data=[
            'VehiclesTitle' => $vehicletitle,
            'VehiclesBrand' => $brandname,
            'VehiclesOverview' => $vehicalorcview,
            'PricePerDay' => $priceperday,
            'FuelType' => $fueltype,
            'ModelYear' => $modelyear,
            'SeatingCapacity' => $seatingcapacity,
           
            'AirConditioner' => $airconditioner,
            'PowerDoorLocks' => $powerdoorlocks,
            'AntiLockBrakingSystem' => $antilockbrakingsys,
            'BrakeAssist' => $brakeassist,
            'PowerSteering' => $powersteering,
            'DriverAirbag' => $driverairbag,
            'PassengerAirbag' => $passengerairbag,
            'PowerWindows' => $powerwindow,

            'CDPlayer' => $cdplayer,
            'CentralLocking' => $centrallocking,
            'CrashSensor' => $crashcensor,
            'LeatherSeats' => $leatherseats,
        ];
        $Vehiclesmodel = new VehiclesModel();
        $query = $Vehiclesmodel->update($id_vehicle,$data);
            if(!$query){
                // return redirect()->back()->with('fail','something went wrong');
                return redirect()->to('dashboard/manage_vehicles')->with('fail','ມີບາງຢ່າງຜິດພາດ');
            }else{
                return redirect()->to('dashboard/manage_vehicles')->with('success','ທ່ານໄດ້ອັບເດດຍານພາຫະນະສໍາເລັດແລ້ວ');
                
            }
    }
    
    public function delete_vehicle($id_vehicle){
        $Vehiclesmodel = new VehiclesModel();

        $data = $Vehiclesmodel->find($id_vehicle);
        $imagefile = $data['Vimage1'];
        $imagefile2 = $data['Vimage2'];
        $imagefile3 = $data['Vimage3'];
        $imagefile4 = $data['Vimage4'];
        $imagefile5 = $data['Vimage5'];
        
        if(file_exists("back/img/vehicleimages/".$imagefile))
        {
            unlink("back/img/vehicleimages/".$imagefile);
        }
        if(file_exists("back/img/vehicleimages/".$imagefile2))
        {
            unlink("back/img/vehicleimages/".$imagefile2);
        }
        if(file_exists("back/img/vehicleimages/".$imagefile3))
        {
            unlink("back/img/vehicleimages/".$imagefile3);
        }
        if(file_exists("back/img/vehicleimages/".$imagefile4))
        {
            unlink("back/img/vehicleimages/".$imagefile4);
        }
        if(file_exists("back/img/vehicleimages/".$imagefile5))
        {
            unlink("back/img/vehicleimages/".$imagefile5);
        }

        $Vehiclesmodel ->delete($id_vehicle);
        return redirect()->to('dashboard/manage_vehicles')->with('delete','ທ່ານລຶບສໍາເລັດແລ້ວ');

    }
}
