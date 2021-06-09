<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo base_url() ?>" style="margin-left: 10px;">Desafio OM30</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <a href="<?php echo base_url('patients') ?>" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-plus"></i> Editar Foto</a>
    </div>
  </nav>
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">
  <div class="row">
    <div class="col-md-12 mb-3">
      <h4 class="mb-2 my-2">Editar Paciente</h4>
      <?php if(validation_errors()){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo validation_errors('<h20>', '</h20> / '); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
      <?php } ?>
      <form class="needs-validation" action="<?php echo base_url("patients/edit/$patient->id") ?>" method="post" novalidate>
        <input value="<?=$patient->id?>" name="id" type="hidden">
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="full_name">Nome Completo</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nome Completo" value="<?=$patient->full_name?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="mother_name">Nome da mãe</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nome da mãe" value="<?=$patient->mother_name?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="birthday">Data de Nascimento</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$patient->birthday?>" required>
            <?php echo feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-1">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="SOMENTE NÚMEROS" value="<?=$patient->cpf?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cns">CNS</label>
            <input type="text" class="form-control" id="cns" name="cns" placeholder="SOMENTE NÚMEROS" value="<?=$patient->cns?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="SOMENTE NÚMEROS" onblur="pesquisacep(this.value);" value="<?=$patient->cep?>" required>
            <?php echo feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="adress">Rua / Avenida</label>
            <input type="text" class="form-control" id="adress" name="adress" placeholder="Rua / Avenida" value="<?=$patient->adress?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="number">Número</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Número" value="<?=$patient->number?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="<?=$patient->complement?>" >
            <?php echo feedback(false) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" value="<?=$patient->district?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-5 mb-1">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="<?=$patient->city?>" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-2 mb-1">
            <label for="state_abbr">Estado</label>
            <select class="custom-select d-block w-100" id="state_abbr" name="state_abbr" required>
              <?php echo select_state_abbr($patient->state_abbr) ?>
            </select>
            <?php echo feedback() ?>
          </div>
        </div>
        <hr class="mb-2">
        <div class="row">
          <div class="col-sm-6">
            <a href="<?php echo base_url() ?>" class="btn btn-outline-secondary btn-block" type="submit">Voltar</a>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-outline-success btn-block" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</main>