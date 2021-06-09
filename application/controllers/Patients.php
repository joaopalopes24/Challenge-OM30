<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Patients extends CI_Controller {

  function __construct() {
    // Call the Controller constructor
    parent::__construct();
    //$this->load->model('pacientes_model', 'pacientes');
  }

  function index() {

    template('patient/index');

  }

  function create() {

    template('patient/create');

  }

  function edit() {

    template('patient/edit');

  }

  function delete() {
    return "Deleatado com Sucesso";
  }

}
