<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'tblbooking';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'userEmail',
        'VehicleId',
        'FromDate',
        'ToDate',
        'message',
        'Status',
        
    ];


    public function managebooking()
    {
        $builder = $this->db->table("tblbooking");

        $builder->select('tblbooking.*,tblusers.FullName,tblbrands.Brands,tblvehicles.VehiclesTitle,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.VehicleId as id_vehicle,tblbooking.Status,tblbooking.PostingDate,tblbooking.id');
        // $builder->from('tblvehicles');
        $builder->join('tblvehicles', 'tblvehicles.id_vehicle=tblbooking.VehicleId');
        $builder->join('tblusers', 'tblusers.id=tblbooking.userEmail');
        $builder->join('tblbrands', 'tblvehicles.VehiclesBrand=tblbrands.id');
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function upstatus(int $id,string $status) {
        $builder = $this->db->table("tblbooking");
        $builder->set('Status',$status);
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;

    }
    public function countbooking()
{
  // $query = $this->db->get('tblvehicles');
  // $query->num_rows();
  $builder = $this->db->table("tblbooking");
  $query=$builder->countAllResults();
  return $query;
}


public function mybooking($loggedUserID)
{
  $builder = $this->db->table("tblbooking");
  
  $builder->select('tblbooking.*,tblvehicles.Vimage1 as Vimage1,tblvehicles.VehiclesTitle,tblvehicles.id_vehicle as vid,tblbrands.Brands,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.Status');
  // $builder->from('tblvehicles');
  $builder->join('tblvehicles', 'tblbooking.VehicleId=tblvehicles.id_vehicle');
  $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
  $builder->where('tblbooking.userEmail',$loggedUserID);
 $query=$builder->get();
 return $query->getResult();

  
}
}