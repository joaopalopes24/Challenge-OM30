<?php

  // Para facilitar a criação de views, sem precisar repetir código,
  // essa função já inclui o header e o footer.

  function template($conteudo, $dados = NULL) {

    $CI = &get_instance();

    $CI->load->view('layout/header', $dados);

    $CI->load->view($conteudo, $dados);

    $CI->load->view('layout/footer');
  }

  // Dentro do Banco de Dados temos campos do tipo DATE e TIMESTAMP.
  // Para retornar o valor da data e hora atual, criei essa função.

  function getData($data_hora = TRUE) {

    date_default_timezone_set('America/Sao_Paulo');

    if ($data_hora) {
        return date('Y-m-d H:i:s');
    } else {
        return date('Y-m-d');
    }
  }