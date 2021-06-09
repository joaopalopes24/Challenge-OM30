<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Patients extends CI_Controller {

  function __construct() {
    // Call the Controller constructor
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('patients_model', 'patients');
  }

  function index() {

    $values['patients'] = $this->patients->read()->result();

    template('patient/index', $values);

  }

  function create() {

    if (!$this->form_validation->run('patient')) {

      template('patient/create');

    } else {

      $values = $this->input->post();
      $values['created_at'] = getData();

      $this->patients->create($values);

      redirect("patients");
    }
  }

  function edit() {

    $id = $this->uri->segment(3);

    if (!$this->form_validation->run('patient')) {

      $values['patient'] = $this->patients->read($id)->row();

      template('patient/edit', $values);

    } else {

      $values = $this->input->post();
      $values['updated_at'] = getData();

      $this->patients->update($values);

      redirect("patients");
    }
  }

  function delete() {
    
    if (!$this->form_validation->run('delete')) {

      redirect("patients");

    } else {

      $id = $this->input->post('id');
      $values['deleted_at'] = getData();

      $this->patients->delete($id,$values);

      redirect("patients");
    }
  }

}
