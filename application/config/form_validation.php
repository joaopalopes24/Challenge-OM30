<?php

 $config = array(
    'create_patient'=> array(
      'photo'       => array('field' => 'photo','label' => 'Foto','rules' => 'required'),  
      'full_name'   => array('field' => 'full_name','label' => 'Nome Completo','rules' => 'required'),  
      'mother_name' => array('field' => 'mother_name','label' => 'Nome da Mãe','rules' => 'required'),
      'birthday'    => array('field' => 'birthday','label' => 'Data de Nascimento','rules' => 'required'),
      'cpf'         => array('field' => 'cpf','label' => 'CPF','rules' => 'required|exact_length[14]|is_unique[patients.cpf]'),
      'cns'         => array('field' => 'cns','label' => 'CNS','rules' => 'required|exact_length[15]|is_unique[patients.cns]'),
      'cep'         => array('field' => 'cep','label' => 'CEP','rules' => 'required|exact_length[9]|regex_match[/^[0-9]{5}[.][0-9]{3}/]'),
      'adress'      => array('field' => 'adress','label' => 'Rua / Avenida','rules' => 'required|max_length[50]'),
      'number'      => array('field' => 'number','label' => 'Número','rules' => 'required|is_natural_no_zero'),
      'complement'  => array('field' => 'complement','label' => 'Complemento','rules' => 'required|max_length[30]'),
      'district'    => array('field' => 'district','label' => 'Bairro','rules' => 'required|max_length[40]'),
      'city'        => array('field' => 'city','label' => 'Cidade','rules' => 'required|max_length[40]'),
      'state_abbr'  => array('field' => 'state_abbr','label' => 'Estado','rules' => 'required|exact_length[2]|in_list[AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO]'),
    ),
    
    'edit_patient'  => array(
      'id'          => array('field' => 'id','label' => 'ID','rules' => 'required'), 
      'photo'       => array('field' => 'photo','label' => 'Foto','rules' => 'required'),  
      'full_name'   => array('field' => 'full_name','label' => 'Nome Completo','rules' => 'required'),  
      'mother_name' => array('field' => 'mother_name','label' => 'Nome da Mãe','rules' => 'required'),
      'birthday'    => array('field' => 'birthday','label' => 'Data de Nascimento','rules' => 'required'),
      'cpf'         => array('field' => 'cpf','label' => 'CPF','rules' => 'required|exact_length[14]'),
      'cns'         => array('field' => 'cns','label' => 'CNS','rules' => 'required|exact_length[15]'),
      'cep'         => array('field' => 'cep','label' => 'CEP','rules' => 'required|exact_length[9]|regex_match[/^[0-9]{5}[.][0-9]{3}/]'),
      'adress'      => array('field' => 'adress','label' => 'Rua / Avenida','rules' => 'required|max_length[50]'),
      'number'      => array('field' => 'number','label' => 'Número','rules' => 'required|is_natural_no_zero'),
      'complement'  => array('field' => 'complement','label' => 'Complemento','rules' => 'required|max_length[30]'),
      'district'    => array('field' => 'district','label' => 'Bairro','rules' => 'required|max_length[40]'),
      'city'        => array('field' => 'city','label' => 'Cidade','rules' => 'required|max_length[40]'),
      'state_abbr'  => array('field' => 'state_abbr','label' => 'Estado','rules' => 'required|exact_length[2]|in_list[AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO]'),
    )
  );

?>