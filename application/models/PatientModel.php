<?php

class PatientModel extends CI_Model {

  public function __construct() {
      // Call the Model constructor
      parent::__construct();
  }
  
  public function read($id = null,$delete = null,$array = null){
      
    $this->db->select();
    
    $this->db->from('patients');
  
    if($id != null){
      $this->db->where('id',$id);
    }
    if($array['full_name'] != null){
      $this->db->where('full_name LIKE','%'.$array['full_name'].'%');
    }
    if($array['cns'] != null){
      $this->db->where('cns LIKE','%'.$array['cns'].'%');
    }
    if($array['cpf'] != null){
      $this->db->where('cpf LIKE','%'.$array['cpf'].'%');
    }
    if($array['birthday'] != null){
      $this->db->where('birthday',$array['birthday']);
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
