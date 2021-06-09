<?php

class Patients_model extends CI_Model {

  function __construct() {
      // Call the Model constructor
      parent::__construct();
  }
  
  public function read($id = null){
      
    $this->db->select();
    
    $this->db->from('patients');
  
    if($id != null){
      $this->db->where('id',$id);
    }
    
    return $this->db->get();
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
    
  public function delete($id = null){
      
    $this->db->where('id',$id);
    
    return $this->db->update('patients',$id);
  }
}
