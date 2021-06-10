<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>" style="margin-left: 10px;">Desafio OM30</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <a href="#" class="btn btn-outline-primary my-2 my-sm-0 mr-sm-2" type="submit"><i class="fas fa-plus"></i> Editar Foto</a>
    </div>
  </nav>
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">
  <div class="row">
    <div class="col-md-12 mb-3">
      <h4 class="mb-2 my-2">Editar Paciente</h4>

      <?= getAlerts(); ?>

      <form class="needs-validation" action="<?= base_url("patient/update/$patient->id") ?>" method="post" novalidate>
        <input value="<?=$patient->id?>" name="id" type="hidden">
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="full_name">Nome Completo</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nome Completo" value="<?=$patient->full_name?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="mother_name">Nome da mãe</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nome da mãe" value="<?=$patient->mother_name?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="birthday">Data de Nascimento</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$patient->birthday?>" required>
            <?= feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-1">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="SOMENTE NÚMEROS" data-mask="000.000.000-00" value="<?=$patient->cpf?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cns">CNS</label>
            <input type="text" class="form-control" id="cns" name="cns" placeholder="SOMENTE NÚMEROS" data-mask="000 0000 0000 0000" value="<?=$patient->cns?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="SOMENTE NÚMEROS" data-mask="00000-000" onblur="pesquisacep(this.value);" value="<?=$patient->cep?>" required>
            <?= feedback() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="address">Rua / Avenida</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Rua / Avenida" value="<?=$patient->address?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="number">Número</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Número" value="<?=$patient->number?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="<?=$patient->complement?>" >
            <?= feedback(false) ?>
          </div>
        </div>
        <input value="<?=$patient->localization?>" name="localization" type="hidden">
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" value="<?=$patient->district?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-5 mb-1">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="<?=$patient->city?>" required>
            <?= feedback() ?>
          </div>
          <div class="col-md-2 mb-1">
            <label for="state_abbr">Estado</label>
            <select class="custom-select d-block w-100" id="state_abbr" name="state_abbr" required>
              <?= select_state_abbr($patient->state_abbr) ?>
            </select>
            <?= feedback() ?>
          </div>
        </div>
        <hr class="mb-2">
        <div class="row">
          <div class="col-sm-6">
            <a href="<?= base_url() ?>" class="btn btn-outline-secondary btn-block mb-2" type="submit">Voltar</a>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-outline-success btn-block mb-2" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</main>