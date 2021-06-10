<?php

class PatientModel extends CI_Model {

  public function __construct() {
      // Call the Model constructor
      parent::__construct();
  }
  
  public function read($id = null,$delete = null,$full_name = null,$cns = null,$cpf = null,$birthday = null){
      
    $this->db->select();
    
    $this->db->from('patients');
  
    if($id != null){
      $this->db->where('id',$id);
    }
    if($full_name != null){
      $this->db->where('full_name',$full_name);
    }
    if($cns != null){
      $this->db->where('cns',$cns);
    }
    if($cpf != null){
      $this->db->where('cpf',$cpf);
    }
    if($birthday != null){
      $this->db->where('birthday',$birthday);
    }
    if($delete == null){
      $this->db->where('deleted_at',NULL);  
    }
    
    return $this->db->order_by('id')->get();
  }

  public function create($array = null)
  {    
    $this->db->insert('patients',$array);

    return $this->db->insert_id(); 
  }

  public function update($array = null){
      
    $this->db->where('id',$array['id']);
    
    return $this->db->update('patients',$array);
      
  }
    
  public function delete($array = null){
      
    $this->db->where('id',$array['id']);
    
    return $this->db->update('patients',$array);
  }
}
