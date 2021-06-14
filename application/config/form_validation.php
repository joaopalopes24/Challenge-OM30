<?php

  $config = array(
    /**
     * Validação do Paciente
     */

    'delete' => array(
      array('field' => 'id','label' => 'ID','rules' => 'required|trim|is_natural_no_zero'),
    ),

    'patient' => array(
      array('field' => 'id','label' => 'ID','rules' => 'trim|is_natural_no_zero'),
      array('field' => 'not_photo','label' => 'Foto','rules' => ''),
      array('field' => 'full_name','label' => 'Nome Completo','rules' => 'required|trim|validate_full_name'),
      array('field' => 'mother_name','label' => 'Nome da Mãe','rules' => 'required|trim|validate_full_name'),
      array('field' => 'birthday','label' => 'Data de Nascimento','rules' => 'required|trim|validate_birthday'),
      array('field' => 'cpf','label' => 'CPF','rules' => 'required|trim|exact_length[14]|validate_cpf|validate_format_cpf|unique[patients.cpf]'),
      array('field' => 'cns','label' => 'CNS','rules' => 'required|trim|exact_length[18]|validate_cns|validate_format_cns|unique[patients.cns]'),
      array('field' => 'cep','label' => 'CEP','rules' => 'required|trim|exact_length[9]|validate_format_cep'),
      array('field' => 'address','label' => 'Rua / Avenida','rules' => 'required|trim'),
      array('field' => 'number','label' => 'Número','rules' => 'required|trim|is_natural_no_zero'),
      array('field' => 'complement','label' => 'Complemento','rules' => 'trim'),
      array('field' => 'localization','label' => 'Localização','rules' => 'trim'),
      array('field' => 'district','label' => 'Bairro','rules' => 'required|trim'),
      array('field' => 'city','label' => 'Cidade','rules' => 'required|trim'),
      array('field' => 'state_abbr','label' => 'Estado','rules' => 'required|trim|exact_length[2]|in_list[AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO]'),
    )
  );

?>