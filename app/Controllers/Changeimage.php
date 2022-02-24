<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Libraries\Hash;
use App\Models\VehiclesModel;

class Changeimage extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
 public function index($id_vehicle){
     $imgvehicle = new VehiclesModel();
     $data['result']= $imgvehicle->showimg($id_vehicle);
     return view('dashboard/changeimage1',$data);
 }
 public function img2($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $data['result']= $imgvehicle->showimg($id_vehicle);
    return view('dashboard/changeimage2',$data);
}
public function img3($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $data['result']= $imgvehicle->showimg($id_vehicle);
    return view('dashboard/changeimage3',$data);
}
public function img4($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $data['result']= $imgvehicle->showimg($id_vehicle);
    return view('dashboard/changeimage4',$data);
}
public function img5($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $data['result']= $imgvehicle->showimg($id_vehicle);
    return view('dashboard/changeimage5',$data);
}

//update

public function updateimg1($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $std_item = $imgvehicle->find($id_vehicle);
    $old_img_name = $std_item['Vimage1'];

    // echo $std_item['Vimage1'];
    $file = $this->request->getFile('img1');
    if($file->isValid() && !$file->hasMoved())
    {

        
        if(file_exists("back/img/vehicleimages/".$old_img_name)){
            unlink("back/img/vehicleimages/".$old_img_name);

        }
        $imageName = $file->getRandomName();
        $file->move('back/img/vehicleimages/',$imageName);

    }
    else{
        $imageName = $old_img_name;
    }
    $data = [

        
        'Vimage1' =>$imageName,
       
    ];
    $updates = $imgvehicle->update($id_vehicle, $data);
    if(!$updates){
        return redirect()->to('dashboard/changeimage1/'.$id_vehicle)->with('fail','ການອັບເດດຮູບພາບລົ້ມເຫລວ');
    }else{
    return redirect()->to('dashboard/changeimage1/'.$id_vehicle)->with('success','ອັບເດດຮູບພາບສຳເລັດແລ້ວ');
    }
}

public function updateimg2($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $std_item = $imgvehicle->find($id_vehicle);
    $old_img_name = $std_item['Vimage2'];

    // echo $std_item['Vimage1'];
    $file = $this->request->getFile('img2');
    if($file->isValid() && !$file->hasMoved())
    {

        
        if(file_exists("back/img/vehicleimages/".$old_img_name)){
            unlink("back/img/vehicleimages/".$old_img_name);

        }
        $imageName = $file->getRandomName();
        $file->move('back/img/vehicleimages/',$imageName);

    }
    else{
        $imageName = $old_img_name;
    }
    $data = [

        
        'Vimage2' =>$imageName,
       
    ];
    $updates = $imgvehicle->update($id_vehicle, $data);
    if(!$updates){
        return redirect()->to('dashboard/changeimage2/'.$id_vehicle)->with('fail','ການອັບເດດຮູບພາບລົ້ມເຫລວ');
    }else{
    return redirect()->to('dashboard/changeimage2/'.$id_vehicle)->with('success','ອັບເດດຮູບພາບສຳເລັດແລ້ວ');
    }
}
public function updateimg3($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $std_item = $imgvehicle->find($id_vehicle);
    $old_img_name = $std_item['Vimage3'];

    // echo $std_item['Vimage1'];
    $file = $this->request->getFile('img3');
    if($file->isValid() && !$file->hasMoved())
    {

        
        if(file_exists("back/img/vehicleimages/".$old_img_name)){
            unlink("back/img/vehicleimages/".$old_img_name);

        }
        $imageName = $file->getRandomName();
        $file->move('back/img/vehicleimages/',$imageName);

    }
    else{
        $imageName = $old_img_name;
    }
    $data = [

        
        'Vimage3' =>$imageName,
       
    ];
    $updates = $imgvehicle->update($id_vehicle, $data);
    if(!$updates){
        return redirect()->to('dashboard/changeimage3/'.$id_vehicle)->with('fail','ການອັບເດດຮູບພາບລົ້ມເຫລວ');
    }else{
    return redirect()->to('dashboard/changeimage3/'.$id_vehicle)->with('success','ອັບເດດຮູບພາບສຳເລັດແລ້ວ');
    }
}
public function updateimg4($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $std_item = $imgvehicle->find($id_vehicle);
    $old_img_name = $std_item['Vimage4'];

    // echo $std_item['Vimage1'];
    $file = $this->request->getFile('img4');
    if($file->isValid() && !$file->hasMoved())
    {

        
        if(file_exists("back/img/vehicleimages/".$old_img_name)){
            unlink("back/img/vehicleimages/".$old_img_name);

        }
        $imageName = $file->getRandomName();
        $file->move('back/img/vehicleimages/',$imageName);

    }
    else{
        $imageName = $old_img_name;
    }
    $data = [

        
        'Vimage4' =>$imageName,
       
    ];
    $updates = $imgvehicle->update($id_vehicle, $data);
    if(!$updates){
        return redirect()->to('dashboard/changeimage4/'.$id_vehicle)->with('fail','ການອັບເດດຮູບພາບລົ້ມເຫລວ');
    }else{
    return redirect()->to('dashboard/changeimage4/'.$id_vehicle)->with('success','ອັບເດດຮູບພາບສຳເລັດແລ້ວ');
    }
}
public function updateimg5($id_vehicle){
    $imgvehicle = new VehiclesModel();
    $std_item = $imgvehicle->find($id_vehicle);
    $old_img_name = $std_item['Vimage5'];

    // echo $std_item['Vimage1'];
    $file = $this->request->getFile('img5');
    if($file->isValid() && !$file->hasMoved())
    {

        
        if(file_exists("back/img/vehicleimages/".$old_img_name)){
            unlink("back/img/vehicleimages/".$old_img_name);

        }
        $imageName = $file->getRandomName();
        $file->move('back/img/vehicleimages/',$imageName);

    }
    else{
        $imageName = $old_img_name;
    }
    $data = [

        
        'Vimage5' =>$imageName,
       
    ];
    $updates = $imgvehicle->update($id_vehicle, $data);
    if(!$updates){
        return redirect()->to('dashboard/changeimage5/'.$id_vehicle)->with('fail','ການອັບເດດຮູບພາບລົ້ມເຫລວ');
    }else{
    return redirect()->to('dashboard/changeimage5/'.$id_vehicle)->with('success','ອັບເດດຮູບພາບສຳເລັດແລ້ວ');
    }
}


}
