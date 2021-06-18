<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

  protected $CI;

	public function __construct($config = array())
	{
    parent::__construct($config);
    $this->_CI =& get_instance(); 
    $this->_config_rules = $config;
	}

  public function unique($value,$string)
  {
    $this->_CI->form_validation->set_message('unique', 'O valor do campo já existe.');

    $id = $this->CI->input->post('id');

    sscanf($string, '%[^.].%[^.]', $table, $field);

    $attribute = $this->CI->db->limit(1)->get_where($table, array($field => $value))->num_rows();

    if($attribute == 0) return true;

    if($id == NULL) return false;

    $attribute = $this->CI->db->limit(1)->get_where($table, array('id' => $id))->result('array');

    if($value == $attribute[0][$field]) return true;

    return false;
  }

  public function validate_format_cpf($cpf)
  {
    $this->_CI->form_validation->set_message('validate_format_cpf', 'O formato não é válido.');

    return preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $cpf) > 0;
  }

  public function validate_cpf($cpf)
  {
    $this->_CI->form_validation->set_message('validate_cpf', 'O campo informado não é válido.');

    $cpf = $this->sanitize($cpf);

    if(mb_strlen($cpf) != 11 || preg_match("/^{$cpf[0]}{11}$/", $cpf)){
      return false;
    }

    for($s = 10, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--){}

    if($cpf[9] != ((($n %= 11) < 2) ? 0 : 11 - $n)){
      return false;
    }

    for($s = 11, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--){}

    if($cpf[10] != ((($n %= 11) < 2) ? 0 : 11 - $n)){
      return false;
    }

    return true;
  }

  public function validate_format_cns($cns)
  {
    $this->_CI->form_validation->set_message('validate_format_cns', 'O formato não é válido.');

    return preg_match('/^\d{3}\ \d{4}\ \d{4}\ \d{4}$/', $cns) > 0;
  }

  public function validate_cns($cns)
  {
    $this->_CI->form_validation->set_message('validate_cns', 'O campo informado não é válido.');

    $cns = $this->sanitize($cns);

    // CNSs definitivos começam em 1 ou 2 / CNSs provisórios em 7, 8 ou 9
    if (preg_match("/[1-2][0-9]{10}00[0-1][0-9]/", $cns) || preg_match("/[7-9][0-9]{14}/", $cns)) {
      return $this->weighted_sum_cns($cns) % 11 == 0;
    }

    return false;
  }

  public function validate_format_cep($cep)
  {
    $this->_CI->form_validation->set_message('validate_format_cep', 'O formato não é válido.');

    return preg_match('/^\d{5}-\d{3}$/', $cep) > 0;
  }

  public function validate_full_name($name)
  {
    $this->_CI->form_validation->set_message('validate_full_name', 'O campo informado não contém sobrenome.');

    return count(explode(" ", $name)) > 1;
  }

  public function validate_birthday($birthday)
  {
    $this->_CI->form_validation->set_message('validate_birthday', 'O campo informado não é válido.');

    $dateCurrent = getData(false);

    if($birthday > $dateCurrent) return false;

    $date1 = date_create($dateCurrent);
    $date2 = date_create($birthday);

    $interval = date_diff($date1,$date2)->days;

    if($interval > 47500) return false;

    return true;
  }

  private function weighted_sum_cns($value)
  {
    $soma = 0;

    for ($i = 0; $i < mb_strlen($value); $i++) {
      $soma += $value[$i] * (15 - $i);
    }

    return $soma;
  }

  private function sanitize($value)
  {
    return empty($value) ? "" : preg_replace('/[^\d]/', '', $value);
  }

}