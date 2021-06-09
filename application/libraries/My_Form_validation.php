<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	function __construct($rules = array())
	{
	  $this->CI =& get_instance();
    parent::__construct($rules);
	}

  function validate_format_cpf($cpf)
  {
    $this->CI->form_validation->set_message('validate_format_cpf', 'O formato de %s informado não é válido.');

    return preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $cpf) > 0;
  }

  function validate_cpf($cpf)
  {
    $this->CI->form_validation->set_message('validate_cpf', 'O campo %s não contém um CPF válido.');

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

  function validate_cns($cns)
  {
    $this->CI->form_validation->set_message('validate_cns', 'O campo %s não contém um CNS válido.');

    $cns = $this->sanitize($cns);

    // CNSs definitivos começam em 1 ou 2 / CNSs provisórios em 7, 8 ou 9
    if (preg_match("/[1-2][0-9]{10}00[0-1][0-9]/", $cns) || preg_match("/[7-9][0-9]{14}/", $cns)) {
      return $this->somaPonderadaCns($cns) % 11 == 0;
    }

    return false;
  }

  private function somaPonderadaCns($value): int
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