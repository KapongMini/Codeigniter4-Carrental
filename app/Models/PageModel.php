<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'tblpages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'PageName',
        'type',
        'detail'
       
        
    ];
    public function setfindpage(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*');
        $query = $builder->get();
        return $query->getResult();
    }
    public function pageupdate(int $id,string $pagedetails)
    {
        $builder = $this->db->table("tblpages");
        $builder->set('detail', $pagedetails);
        
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;
    }
    public function findpage(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*');
       
        $query = $builder->get();
        return $query->getResult();
    }
    public function findabout(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*,tblpages.PageName,tblpages.detail');
        $builder->where('id',1);
        $query = $builder->get();
        return $query->getResult();
    }
    public function findfaq(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*,tblpages.PageName,tblpages.detail');
        $builder->where('id',2);
        $query = $builder->get();
        return $query->getResult();
    }
    public function findprivacy(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*,tblpages.PageName,tblpages.detail');
        $builder->where('id',3);
        $query = $builder->get();
        return $query->getResult();
    }
    public function findterms(){
        $builder = $this->db->table("tblpages");
        $builder->select('tblpages.*,tblpages.PageName,tblpages.detail');
        $builder->where('id',4);
        $query = $builder->get();
        return $query->getResult();
    }

}