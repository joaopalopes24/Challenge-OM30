<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Patient extends CI_Controller {

  public function __construct() {
    // Call the Controller constructor
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('PatientModel', 'patients');
  }

  public function index() {

    if (!$this->input->post()) {

      $values = [
        'full_name' => '',
        'cns' => '',
        'cpf' => '',
        'birthday' => '',
      ];

      $values['patients'] = $this->patients->read()->result();

      template('patient/index', $values);

    } else {

      $values['full_name'] = $full_name = $this->input->post('full_name');
      $values['cns'] = $cns = $this->input->post('cns');
      $values['cpf'] = $cpf = $this->input->post('cpf');
      $values['birthday'] = $birthday = $this->input->post('birthday');

      $values['patients'] = $this->patients->read(null,true,$full_name,$cns,$cpf,$birthday)->result();

      template('patient/index', $values);
    }

  }

  public function create() {

    template('patient/create');
  }

  public function store() {

    if (!$this->form_validation->run('patient')) {

      $this->session->set_flashdata([
        'error' => $this->form_validation->error_array(),
      ]);

      redirect("patient/create");

    } else {

      $values = [
        'full_name' => $this->input->post('full_name'),
        'mother_name' => $this->input->post('mother_name'),
        'birthday' => $this->input->post('birthday'),
        'cpf' => $this->input->post('cpf'),
        'cns' => $this->input->post('cns'),
        'cep' => $this->input->post('cep'),
        'address' => $this->input->post('address'),
        'number' => $this->input->post('number'),
        'complement' => $this->input->post('complement'),
        'localization' => $this->input->post('localization'),
        'district' => $this->input->post('district'),
        'city' => $this->input->post('city'),
        'state_abbr' => $this->input->post('state_abbr'),
        'created_at' => getData(),
      ];

      $result = $this->patients->create($values);

      if($result){
        $this->session->set_flashdata(['success' => 'Paciente cadastrado com sucesso!',]);
      }else{
        $this->session->set_flashdata(['warning' => 'Erro ao cadastrar Paciente!',]);
      }

      redirect("patient");
    }
  }

  public function edit($id) {

    $values['patient'] = $this->patients->read($id,true)->row();

    template('patient/edit', $values);
  }

  public function update($id) {

    if (!$this->form_validation->run('patient')) {

      $this->session->set_flashdata([
        'error' => $this->form_validation->error_array(),
      ]);
      
      redirect("patient/edit/$id");

    } else {

      $values = [
        'id' => $this->input->post('id'),
        'full_name' => $this->input->post('full_name'),
        'mother_name' => $this->input->post('mother_name'),
        'birthday' => $this->input->post('birthday'),
        'cpf' => $this->input->post('cpf'),
        'cns' => $this->input->post('cns'),
        'cep' => $this->input->post('cep'),
        'address' => $this->input->post('address'),
        'number' => $this->input->post('number'),
        'complement' => $this->input->post('complement'),
        'localization' => $this->input->post('localization'),
        'district' => $this->input->post('district'),
        'city' => $this->input->post('city'),
        'state_abbr' => $this->input->post('state_abbr'),
        'updated_at' => getData(),
      ];

      $result = $this->patients->update($values);

      if($result){
        $this->session->set_flashdata(['success' => 'Paciente editado com sucesso!',]);
      }else{
        $this->session->set_flashdata(['warning' => 'Erro ao editar Paciente!',]);
      }

      redirect("patient");
    }
  }

  public function destroy() {
    
    if (!$this->form_validation->run('delete')) {

      $this->session->set_flashdata([
        'error' => $this->form_validation->error_array(),
      ]);

      redirect("patient");

    } else {

      $values['id'] = $this->input->post('id');
      $values['deleted_at'] = getData();

      $result = $this->patients->delete($values);

      if($result){
        $this->session->set_flashdata(['success' => 'Paciente deletado com sucesso!',]);
      }else{
        $this->session->set_flashdata(['warning' => 'Erro ao deletar Paciente!',]);
      }

      redirect("patient");
    }
  }

}
