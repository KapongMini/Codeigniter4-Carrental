<?php

namespace App\Models;

use CodeIgniter\Model;

class SubModel extends Model
{
    protected $table = 'tblsubscribers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'SubscriberEmail',
       
        
    ];
    public function checksub()
    {
      $builder = $this->db->table("tblsubscribers");
      $builder->select('tblsubscribers.*,SubscriberEmail');
    //   $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
      $builder->where('SubscriberEmail=:subscriberemail');
      $query = $builder->get();
      return $query->getResult();
    
      
    }
    public function managesub()
    {
      $builder = $this->db->table("tblsubscribers");
      $builder->select('tblsubscribers.*');
    //   $builder->join('tblbrands', 'tblbrands.id=tblvehicles.VehiclesBrand');
      // $builder->where('SubscriberEmail=:subscriberemail');
      $query = $builder->get();
      return $query->getResult();
    
      
    }
    public function countsub()
    {
      // $query = $this->db->get('tblvehicles');
      // $query->num_rows();
      $builder = $this->db->table("tblsubscribers");
      $query=$builder->countAllResults();
      return $query;
    }


  
}