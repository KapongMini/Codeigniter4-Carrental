<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tblusers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'FullName',
        'Emailld',
        'Password',
        'ContactNo',
        'dob',
        'Address',
        'City',
        'Country',
        'RagDate',
        'UpdationDate'
    ];
    public function __construct()
    {
        parent::__construct(); 
    }
    
 
    public function Userdata($id)
    {
        $builder = $this->db->table("tblusers");

        $builder->select('FullName');
        // $builder->from('tblvehicles');
        //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
        $builder->where('Emailld',$id);
        $query = $builder->get();
        // return $query->getResult();
        if(count($query->getResultArray())==1){
            return $query->getRow();
        }
        else
        {
            return false;
        }
    }
    public function setupdate(int $id, string $fullname, string $email,string $ContactNo,string $dob, string $address, string $country,string $city)
    {
        $builder = $this->db->table("tblusers");

        $builder->set('FullName', $fullname);
        $builder->set('Emailld', $email);
       
        $builder->set('ContactNo', $ContactNo);
        $builder->set('dob', $dob);
        $builder->set('Address', $address);
        $builder->set('Country', $country);
        $builder->set('City', $city);
        // $builder->from('tblvehicles');
        //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;
    }

    public function manageusers()
    {
        $builder = $this->db->table("tblusers");

        $builder->select('tblusers.*');
        // $builder->from('tblvehicles');
        // $builder->join('tblusers', 'tblusers.id=tbltestimonial.UserEmail');
        $query = $builder->get();
        return $query->getResult();
    }
    public function countUser()
    {
      // $query = $this->db->get('tblvehicles');
      // $query->num_rows();
      $builder = $this->db->table("tblusers");
      $query=$builder->countAllResults();
      return $query;
    }
    public function updatepassword(int $id, string $newpassword)
    {
        $builder = $this->db->table("tblusers");

        $builder->set('Password', $newpassword);
        
        // $builder->from('tblvehicles');
        //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;
    }

    public function forgottest(string $email,string $ContactNo)
    {
        $builder = $this->db->table("tblusers");

        $builder->select('tblusers.*,tblusers.Emailld');
        // $builder->from('tblvehicles');
        //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
        $builder->where('Emailld',$email);
        $builder->where('ContactNo',$ContactNo);
        $query = $builder->get();
        return $query->getResult();
        // if(count($query->getResultArray())==1){
        //     return $query->getRow();
        // }
        // else
        // {
        //     return false;
        // }
    }
   
    public function Updation_Date(string $email,string $ContactNo,string $newpassword)
    {
        

        $builder = $this->db->table("tblusers");

        $builder->set('Password', $newpassword);
        
        // $builder->from('tblvehicles');
        //   $builder->join('tblbrands as b', 'b.id=v.VehiclesBrand');
        $builder->where('Emailld',$email);
        $builder->where('ContactNo',$ContactNo);
        $query = $builder->update();
        return $query;
    }
}
