<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo base_url() ?>" style="margin-left: 10px;">Desafio OM30</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <a href="<?php echo base_url('patients') ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit">Listar Pacientes</a>
    </div>
  </nav>
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">
  <div class="row">
    <div class="col-md-12 mb-3">
      <h4 class="mb-2 my-2">Adicionar Paciente</h4>
      <?php if(validation_errors()){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo validation_errors('<h20>', '</h20> / '); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
      <?php } ?>
      <form class="needs-validation" action="#" method="post" novalidate>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="full_name">Nome Completo</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nome Completo" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="mother_name">Nome da mãe</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nome da mãe" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="birthday">Data de Nascimento</label>
            <input type="date" class="form-control" id="birthday" name="birthday" required>
            <?php echo feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-1">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="SOMENTE NÚMEROS" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cns">CNS</label>
            <input type="text" class="form-control" id="cns" name="cns" placeholder="SOMENTE NÚMEROS" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="SOMENTE NÚMEROS" onblur="pesquisacep(this.value);" required>
            <?php echo feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="adress">Rua / Avenida</label>
            <input type="text" class="form-control" id="adress" name="adress" placeholder="Rua / Avenida" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="number">Número</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Número" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento">
            <?php echo feedback(false) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-5 mb-1">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" required>
            <?php echo feedback() ?>
          </div>
          <div class="col-md-2 mb-1">
            <label for="state_abbr">Estado</label>
            <select class="custom-select d-block w-100" id="state_abbr" name="state_abbr" required>
              <?php echo select_state_abbr() ?>
            </select>
            <?php echo feedback() ?>
          </div>
        </div>
        <hr class="mb-2">
        <div class="row">
          <div class="col-sm-6">
            <a href="<?php echo base_url() ?>" class="btn btn-secondary btn-block" type="submit">Voltar</a>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-success btn-block" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</main>