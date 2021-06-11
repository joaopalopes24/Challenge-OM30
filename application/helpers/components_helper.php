<?php

// Componente criado com intuito de evitar a repetição das mensagens
// de erro em todos os forms necessários

function feedback($invalid = TRUE, $valid = TRUE) {

  $msg = '';

  if($invalid){
    $msg = $msg.'<div class="invalid-feedback">Campo Obrigatório!</div>';
  }
  if($valid){
    $msg = $msg.'<div class="valid-feedback">OK!</div>';
  }

  return $msg;
}

// Componente criado com intuito de evitar a repetição dos Estados
// brasileiros em todos os selects necessários

function select_state_abbr($value = '') {

  $msg = '<option value="">Escolher...</option>
          <option value="AC" '.($value === 'AC' ? 'selected' : '').'>Acre</option>
          <option value="AL" '.($value === 'AL' ? 'selected' : '').'>Alagoas</option>
          <option value="AP" '.($value === 'AP' ? 'selected' : '').'>Amapá</option>
          <option value="AM" '.($value === 'AM' ? 'selected' : '').'>Amazonas</option>
          <option value="BA" '.($value === 'BA' ? 'selected' : '').'>Bahia</option>
          <option value="CE" '.($value === 'CE' ? 'selected' : '').'>Ceará</option>
          <option value="DF" '.($value === 'DF' ? 'selected' : '').'>Distrito Federal</option>
          <option value="ES" '.($value === 'ES' ? 'selected' : '').'>Espírito Santo</option>
          <option value="GO" '.($value === 'GO' ? 'selected' : '').'>Goiás</option>
          <option value="MA" '.($value === 'MA' ? 'selected' : '').'>Maranhão</option>
          <option value="MT" '.($value === 'MT' ? 'selected' : '').'>Mato Grosso</option>
          <option value="MS" '.($value === 'MS' ? 'selected' : '').'>Mato Grosso do Sul</option>
          <option value="MG" '.($value === 'MG' ? 'selected' : '').'>Minas Gerais</option>
          <option value="PA" '.($value === 'PA' ? 'selected' : '').'>Pará</option>
          <option value="PB" '.($value === 'PB' ? 'selected' : '').'>Paraíba</option>
          <option value="PR" '.($value === 'PR' ? 'selected' : '').'>Paraná</option>
          <option value="PE" '.($value === 'PE' ? 'selected' : '').'>Pernambuco</option>
          <option value="PI" '.($value === 'PI' ? 'selected' : '').'>Piauí</option>
          <option value="RJ" '.($value === 'RJ' ? 'selected' : '').'>Rio de Janeiro</option>
          <option value="RN" '.($value === 'RN' ? 'selected' : '').'>Rio Grande do Norte</option>
          <option value="RS" '.($value === 'RS' ? 'selected' : '').'>Rio Grande do Sul</option>
          <option value="RO" '.($value === 'RO' ? 'selected' : '').'>Rondônia</option>
          <option value="RR" '.($value === 'RR' ? 'selected' : '').'>Roraima</option>
          <option value="SC" '.($value === 'SC' ? 'selected' : '').'>Santa Catarina</option>
          <option value="SP" '.($value === 'SP' ? 'selected' : '').'>São Paulo</option>
          <option value="SE" '.($value === 'SE' ? 'selected' : '').'>Sergipe</option>
          <option value="TO" '.($value === 'TO' ? 'selected' : '').'>Tocantins</option>';

  return $msg;
}

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

function getAlerts() {

  $msg = '';

  if(getAlertSuccess() != NULL){
    $msg = $msg.
    '<div class="alert alert-success alert-dismissible fade show" role="alert">'
        .getAlertSuccess().
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">x</span>
      </button>
    </div>';
  }
  if(getAlertDanger() != NULL){
    $msg = $msg.
    '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
        .getAlertDanger().
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">x</span>
      </button>
    </div>';
  }
  if(getAlertWarning() != NULL){
    $msg = $msg.
    '<div class="alert alert-warning alert-dismissible fade show" role="alert">'
        .getAlertWarning().
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">x</span>
      </button>
    </div>';
  }

  return $msg;
}