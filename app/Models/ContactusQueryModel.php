<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactusQueryModel extends Model
{
    protected $table = 'tblcontactusquery';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'EmailId',
        'ContactNumber',
        'Message',
        'PostingDate',
        'status',
        
    ];
    public function managecontactquery()
    {
        $builder = $this->db->table("tblcontactusquery");

        $builder->select('tblcontactusquery.*');
        // $builder->from('tblvehicles');
        // $builder->join('tblusers', 'tblusers.id=tbltestimonial.UserEmail');
        $query = $builder->get();
        return $query->getResult();
    }
    public function upstatus(int $id,string $status) {
        $builder = $this->db->table("tblcontactusquery");
        $builder->set('status',$status);
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;

    }

    public function countcontactquery()
    {
      // $query = $this->db->get('tblvehicles');
      // $query->num_rows();
      $builder = $this->db->table("tblcontactusquery");
      $query=$builder->countAllResults();
      return $query;
    }

  
}