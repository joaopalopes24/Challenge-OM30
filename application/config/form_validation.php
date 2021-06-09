<?php

 $config = array(
    /**
     * Validação do Paciente
     */
    'patient' => array(
      /*array('field' => 'photo',
        'label' => 'Foto',
        'rules' => 'required'),*/
      array('field' => 'full_name',
        'label' => 'Nome Completo',
        'rules' => 'required|trim|xss_clean'),
      array('field' => 'mother_name',
        'label' => 'Nome da Mãe',
        'rules' => 'required|trim|xss_clean'),
      array('field' => 'birthday',
        'label' => 'Data de Nascimento',
        'rules' => 'required|trim|xss_clean'),
      array('field' => 'cpf',
        'label' => 'CPF',
        'rules' => 'required|trim|xss_clean|exact_length[14]|validate_cpf|validate_format_cpf'),
      array('field' => 'cns',
        'label' => 'CNS',
        'rules' => 'required|trim|xss_clean|exact_length[15]|validate_cns'),
      array('field' => 'cep',
        'label' => 'CEP',
        'rules' => 'required|trim|xss_clean|exact_length[9]|regex_match[/^[0-9]{5}[.][0-9]{3}/]'),
      array('field' => 'adress',
        'label' => 'Rua / Avenida',
        'rules' => 'required|trim|xss_clean|max_length[50]'),
      array('field' => 'number',
        'label' => 'Número',
        'rules' => 'required|trim|xss_clean|is_natural_no_zero'),
      array('field' => 'complement',
        'label' => 'Complemento',
        'rules' => 'trim|xss_clean|max_length[30]'),
      array('field' => 'district',
        'label' => 'Bairro',
        'rules' => 'required|trim|xss_clean|max_length[40]'),
      array('field' => 'city',
        'label' => 'Cidade',
        'rules' => 'required|trim|xss_clean|max_length[40]'),
      array('field' => 'state_abbr',
        'label' => 'Estado',
        'rules' => 'required|trim|xss_clean|exact_length[2]|in_list[AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO]'),
    )

  );

?>