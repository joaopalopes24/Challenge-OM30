<?php

  $config = array(
    /**
     * Validação do Paciente
     */

    'delete' => array(
      array('field' => 'id',
        'label' => 'ID',
        'rules' => 'trim|is_natural_no_zero'),
    ),

    'patient' => array(
      array('field' => 'id',
        'label' => 'ID',
        'rules' => 'trim|is_natural_no_zero'),
      /*array('field' => 'photo',
        'label' => 'Foto',
        'rules' => 'required'),*/
      array('field' => 'full_name',
        'label' => 'Nome Completo',
        'rules' => 'required|trim|validate_full_name'),
      array('field' => 'mother_name',
        'label' => 'Nome da Mãe',
        'rules' => 'required|trim|validate_full_name'),
      array('field' => 'birthday',
        'label' => 'Data de Nascimento',
        'rules' => 'required|trim'),
      array('field' => 'cpf',
        'label' => 'CPF',
        'rules' => 'required|trim|exact_length[14]|validate_cpf|validate_format_cpf|unique[patients.cpf]'),
      array('field' => 'cns',
        'label' => 'CNS',
        'rules' => 'required|trim|exact_length[15]|validate_cns|unique[patients.cns]'),
      array('field' => 'cep',
        'label' => 'CEP',
        'rules' => 'required|trim|exact_length[9]|validate_format_cep'),
      array('field' => 'adress',
        'label' => 'Rua / Avenida',
        'rules' => 'required|trim|max_length[50]'),
      array('field' => 'number',
        'label' => 'Número',
        'rules' => 'required|trim|is_natural_no_zero'),
      array('field' => 'complement',
        'label' => 'Complemento',
        'rules' => 'trim|max_length[30]'),
      array('field' => 'district',
        'label' => 'Bairro',
        'rules' => 'required|trim|max_length[40]'),
      array('field' => 'city',
        'label' => 'Cidade',
        'rules' => 'required|trim|max_length[40]'),
      array('field' => 'state_abbr',
        'label' => 'Estado',
        'rules' => 'required|trim|exact_length[2]|in_list[AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO]'),
    )

  );

?>