<?php

namespace App\Models;

use CodeIgniter\Model;

class contactusinfoModel extends Model
{
    protected $table = 'tblcontactusinfo';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Address',
        'Email',
        'ContactNo',
        
       
        
    ];

    public function showinfo()
    {
        $builder = $this->db->table("tblcontactusinfo");

        $builder->select('tblcontactusinfo.*,Address,Email,ContactNo');
        
        $query = $builder->get();
        return $query->getResult();
    }
    public function setupdate(int $id,string $Address,string $Email,string $ContactNo) {
        $builder = $this->db->table("tblcontactusinfo");
        $builder->set('Address', $Address);
        $builder->set('Email', $Email);
       
        $builder->set('ContactNo', $ContactNo);
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;
    }
}
