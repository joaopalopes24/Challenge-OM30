<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo base_url() ?>" style="margin-left: 10px;">Desafio OM30</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <a href="<?php echo base_url('patients/create') ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit">Adicionar Paciente</a>
    </div>
  </nav>
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="row">
      <?php //var_dump($patients); ?>
      <?php foreach($patients as $patient){?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          <div class="card-body">
            <p class="card-text">
              <b>Nome: </b> <?=$patient->full_name?><br>
              <b>Nome da Mãe: </b> <?=$patient->mother_name?><br>
              <b>CPF: </b> <?=$patient->cpf?><br>
              <b>CNS: </b> <?=$patient->cns?><br>
              <b>CEP: </b> <?=$patient->cep?><br>
              <?php $adress = $patient->adress.' '.$patient->number.' '.$patient->complement.' - '.$patient->district.', '.$patient->city.' - '.$patient->state_abbr ?>
              <b>Endereço: </b> <?=$adress?><br>
              <b>Data de Nascimento: </b> <?=$patient->birthday?>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?php echo base_url("patients/edit/$patient->id") ?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a href="<?php echo base_url("patients/delete/$patient->id") ?>" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</main>