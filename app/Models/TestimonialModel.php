<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table = 'tbltestimonial';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'UserEmail',
        'Testimonial',
        'PostingDate',
        'status',
       
        
    ];

    public function managetest()
    {
        $builder = $this->db->table("tbltestimonial");

        $builder->select('tbltestimonial.*,tblusers.FullName,tblusers.Emailld,tbltestimonial.UserEmail,tbltestimonial.Testimonial,tbltestimonial.PostingDate,tbltestimonial.status,tbltestimonial.id');
        // $builder->from('tblvehicles');
        $builder->join('tblusers', 'tblusers.id=tbltestimonial.UserEmail');
        $query = $builder->get();
        return $query->getResult();
    }

    public function upstatus(int $id,string $status) {
        $builder = $this->db->table("tbltestimonial");
        $builder->set('status',$status);
        $builder->where('id',$id);
        $query = $builder->update();
        return $query;

    }
    public function counttesttimonial()
    {
      // $query = $this->db->get('tblvehicles');
      // $query->num_rows();
      $builder = $this->db->table("tbltestimonial");
      $query=$builder->countAllResults();
      return $query;
    }

    public function showtesti(int $status)
    {
        $builder = $this->db->table("tbltestimonial");

        $builder->select('tbltestimonial.*,tbltestimonial.Testimonial,tblusers.FullName');
        // $builder->from('tblvehicles');
        $builder->join('tblusers', 'tbltestimonial.UserEmail=tblusers.id');
        $builder->where('tbltestimonial.status',$status);
        $query = $builder->get();
        return $query->getResult();
    }

    public function mytesti($loggedUserID) {
        $builder = $this->db->table("tbltestimonial");
        $builder->select('tbltestimonial.*');
        $builder->where('UserEmail',$loggedUserID);
        $query = $builder->get();
        return $query->getResult();

    }


  
}