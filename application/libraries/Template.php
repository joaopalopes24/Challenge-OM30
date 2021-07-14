<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

  // Para facilitar a criação de views, sem precisar repetir código,
  // essa função já inclui o header e o footer.

  function load($content, $values = NULL) {

    $CI = &get_instance();

    $CI->load->view('layout/header', $values);

    $CI->load->view($content, $values);

    $CI->load->view('layout/footer');
  }
}