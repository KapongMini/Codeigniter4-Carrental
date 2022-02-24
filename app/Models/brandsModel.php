<?php

namespace App\Models;

use CodeIgniter\Model;

class brandsModel extends Model
{
    protected $table = 'tblbrands';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Brands',
        
    ];


    public function showb(){
        $builder = $this->db->table('tblbrands');
        $query = $builder->get();
        return $query->getResult();
    }
    public function showbrand(){
        $builder = $this->db->table('tblbrands');
        $builder->select('tblbrands.*');
        
        $query = $builder->get();
        return $query->getResult();
    }

    public function countbrand()
    {
      // $query = $this->db->get('tblvehicles');
      // $query->num_rows();
      $builder = $this->db->table("tblbrands");
      $query=$builder->countAllResults();
      return $query;
    }
}