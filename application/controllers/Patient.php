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

      $values['patients'] = $this->patients->read(null,false,$full_name,$cns,$cpf,$birthday)->result();

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

      array_key_exists('not_photo',$this->input->post()) ? $photo = NULL : $photo = $this->do_upload(NULL,$_FILES['photo']);

      $values = [
        'photo' => $photo,
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

    $values['patient'] = $this->patients->read($id,false)->row();

    template('patient/edit', $values);
  }

  public function update($id) {

    if (!$this->form_validation->run('patient')) {

      $this->session->set_flashdata([
        'error' => $this->form_validation->error_array(),
      ]);
      
      redirect("patient/edit/$id");

    } else {

      array_key_exists('not_photo',$this->input->post()) ? $photo = $this->delete_file($id) : $photo = $this->do_upload($id,$_FILES['photo']);
      
      $values = [
        'id' => $this->input->post('id'),
        'photo' => $photo,
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

  private function do_upload($id,$photo)
  {
    if($photo['name'] != ''){
      date_default_timezone_set('America/Sao_Paulo');

      $config['upload_path'] = './uploads/patient';
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['file_name'] = date("d-m-Y")."_".time();
      $config['max_size'] = 12000;

      $this->load->library('upload',$config);

      if(!$this->upload->do_upload('photo')){
        $this->session->set_flashdata([
          'warning' => $this->upload->display_errors('',''),
        ]);

        return NULL;
      }else{
        if($id != NULL) $this->delete_file($id);

        $data = array('upload_data' => $this->upload->data());

        return $data['upload_data']['file_name'];
      }
    }

    if($id != NULL){
      $photo = $this->patients->read($id,false)->row()->photo;

      return $photo;
    }

    return NULL;
  }

  private function delete_file($id)
  {
    $photo = $this->patients->read($id,false)->row()->photo;

    $path = $_SERVER['DOCUMENT_ROOT'].'uploads/patient/'.$photo;

    if(is_readable($path) && $photo != NULL) unlink($path);

    return NULL;
  }

}