<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiclesModel extends Model
{
  protected $table = 'tblvehicles';
  protected $primaryKey = 'id_vehicle';
  protected $allowedFields = [
    'VehiclesTitle',
    'VehiclesBrand',
    'VehiclesOverview',
    'PricePerDay',
    'FuelType',
    'ModelYear',
    'SeatingCapacity',
    'Vimage1',
    'Vimage2',
    'Vimage3',
    'Vimage4',
    'Vimage5',
    'AirConditioner',
    'PowerDoorLocks',
    'AntiLockBrakingSystem',
    'BrakeAssist',
    'PowerSteering',
    'DriverAirbag',
    'PassengerAirbag',
    'PowerWindows',
    'CDPlayer',
    'CentralLocking',
    'CrashSensor',
    'LeatherSeats',
    'RegDate',
    'UpdationDate',

  ];
  public function getAll()
  {
    $builder = $this->db->table("tblvehicles");
    // $builder->select('tblvehicles.*,tblbrands.Brands,tblbrands.id as bid');
    $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
    // $builder->where('tblvehicles.id_vehicle=:id_vehicle');
    $query = $builder->get();
    return $query->getResult();
  }
  public function setfind($id_vehicle)
  {
    $builder = $this->db->table("tblvehicles as v");

    $builder->select('v.*,b.Brands,b.id as bid');
    // $builder->from('tblvehicles');
    $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
    $builder->where('v.id_vehicle', $id_vehicle);
    $query = $builder->get();
    return $query->getResult();
  }

  public function showimg($id_vehicle)
  {
    $builder = $this->db->table('tblvehicles');
    $builder->select('tblvehicles.*,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5');
    $builder->where('tblvehicles.id_vehicle', $id_vehicle);
    $query = $builder->get();
    return $query->getResult();
  }


  public function showhome()
  {
    $builder = $this->db->table("tblvehicles");
    $builder->select('tblvehicles.*,VehiclesTitle,Brands,PricePerDay,FuelType,ModelYear,id_vehicle,SeatingCapacity,VehiclesOverview,Vimage1');
    $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
    // $builder->where('tblvehicles.id_vehicle=:id_vehicle');
    $query = $builder->get();
    return $query->getResult();
  }

  public function vdetails($id_vehicle)
  {
    $builder = $this->db->table("tblvehicles");

    $builder->select('tblvehicles.*,tblbrands.Brands,tblbrands.id as bid');
    // $builder->from('tblvehicles');
    $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
    $builder->where('tblvehicles.id_vehicle', $id_vehicle);
    $query = $builder->get();
    return $query->getResult();
  }
  
  public function similar($bid)
  {
    $builder = $this->db->table("tblvehicles as v");
    

    $builder->select('v.*,v.VehiclesTitle,b.Brands,v.PricePerDay,v.FuelType,v.ModelYear,v.id_vehicle,v.SeatingCapacity,v.VehiclesOverview,v.Vimage1');
    // $builder->from('tblvehicles');
    $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
    $builder->where('v.VehiclesBrand',$bid);
    
    $query = $builder->get();
    return $query->getResult();
    // $query = $builder->get();
        
    //     if(count($query->getResultArray()) > 0){
    //         return $query->getRow();
    //     }
    //     else
    //     {
    //         return false;
    //     }
  }
  public function countrow()
  {
    // $query = $this->db->get('tblvehicles');
    // $query->num_rows();
    $builder = $this->db->table("tblvehicles");
    $query = $builder->countAllResults();
    return $query;
  }


  public function paginateNews(int $nb_page,string $name_g) {
    return $this->select()->join('tblbrands', 'tblbrands.id = tblvehicles.VehiclesBrand')->paginate($nb_page,$name_g);
}

  // public function findCar()
  // {
  //   $builder = $this->db->table("tblvehicles as v");

  //   $builder->select('v.*,b.Brands,b.id as bid');
  //   // $builder->from('tblvehicles');
  //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');

  //   $query = $builder->get();
  //   return $query->getResult();
  // }

  public function findCar2()
  {
    $builder = $this->db->table("tblvehicles as v");

    $builder->select('v.*,b.Brands,b.id as bid');
    // $builder->from('tblvehicles');
    $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
    $builder->orderBy('id', 'desc');
    $builder->limit(3, 1);

    $query = $builder->get();
    return $query->getResult();
  }

  public function countrow_search($brand, $fueltype)
  {
    // $query = $this->db->get('tblvehicles');
    // $query->num_rows();
    $builder = $this->db->table("tblvehicles");
    $builder->select('tblvehicles.*,id_vehicle');
    $builder->where('tblvehicles.VehiclesBrand', $brand);
    $builder->where('tblvehicles.FuelType', $fueltype);
    $query = $builder->countAllResults();
    return $query;
  }


  public function findCar3($brand, $fueltype)
  {
    $builder = $this->db->table("tblvehicles as v");

    $builder->select('v.*,b.Brands,b.id as bid');
    // $builder->from('tblvehicles');
    $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
    $builder->where('v.VehiclesBrand', $brand);
    $builder->where('v.FuelType', $fueltype);
    $query = $builder->get();
    return $query->getResult();
  }
}
