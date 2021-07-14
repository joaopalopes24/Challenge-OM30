<?php

  // Captando as messagens de alerta na sessão

  function getAlertSuccess() {
    
    $CI = &get_instance();

    $success = $CI->session->userdata('success');

    if($success == NULL) return NULL;

    return $success;
  }

  function getAlertDanger() {

    $CI = &get_instance(); $msg = '';

    $errors = $CI->session->userdata('error');

    if($errors == NULL) return NULL;

    foreach($CI->session->userdata('error') as $error){
      $msg = $msg.$error.'<br>';
    }

    return $msg;
  }

  function getAlertWarning() {

    $CI = &get_instance();

    $warning = $CI->session->userdata('warning');

    if($warning == NULL) return NULL;

    return $warning;
  }

  // Dentro do Banco de Dados temos campos do tipo DATE e TIMESTAMP.
  // Para retornar o valor da data e hora atual, criei essa função.

  function getData($dateTime = TRUE) {

    date_default_timezone_set('America/Sao_Paulo');

    if ($dateTime) {
        return date('Y-m-d H:i:s');
    } else {
        return date('Y-m-d');
    }
  }

  // Para retornar o valor da data e hora no formato brasileiro.

  function dateFormat($date) {

    date_default_timezone_set('America/Sao_Paulo');

    $date = new DateTime($date);

    return $date->format('d/m/Y');
  }