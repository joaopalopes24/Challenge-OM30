<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Patients extends CI_Controller {

  function __construct() {
    // Call the Controller constructor
    parent::__construct();
    $this->load->library('form_validation');
    //$this->load->model('pacientes_model', 'pacientes');
  }

  function index() {

    template('patient/index');

  }

  function create() {

    if ($this->form_validation->run('patient') == FALSE) {

        template('patient/create');

    } else {

      $dados = array(
        'full_name' => $this->input->post('full_name'),
        'mother_name' => $this->input->post('mother_name'),
        'birthday' => $this->input->post('birthday'),
        'cpf' => $this->input->post('cpf'),
        'cns' => $this->input->post('cns'),
        'cep' => $this->input->post('cep'),
        'adress' => $this->input->post('adress'),
        'number' => $this->input->post('number'),
        'complement' => $this->input->post('complement'),
        'district' => $this->input->post('district'),
        'city' => $this->input->post('city'),
        'state_abbr' => $this->input->post('state_abbr'),
      );

      var_dump($dados);
    }
  }

  function edit() {

    template('patient/edit');

  }

  function delete() {
    return "Deleatado com Sucesso";
  }

}
