<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>" style="margin-left: 10px;">Desafio OM30</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <a href="<?= base_url('patient/create') ?>" class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit"><i class="fas fa-plus"></i> Adicionar Paciente</a>
      <button type="button" class="btn btn-outline-primary mr-sm-2" data-toggle="modal" data-target="#modalSearch"><i class="fas fa-search"></i></button>
    </div>
  </nav>
  <!-- Modal de Exclusão de Pacientes -->
  <div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="needs-validation" method="post" action="<?= base_url() ?>" novalidate>
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Pesquisar Paciente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="full_name" class="col-form-label">Nome do Paciente</label>
              <input type="search" class="form-control" id="full_name" name="full_name" value="<?= $full_name ?>">
            </div>
            <div class="form-group">
              <label for="cns" class="col-form-label">CNS</label>
              <input type="search" class="form-control" id="cns" name="cns" data-mask="000 0000 0000 0000" value="<?= $cns ?>">
            </div>
            <div class="row">
              <div class="form-group col-6">
                <label for="cpf" class="col-form-label">CPF</label>
                <input type="search" class="form-control" id="cpf" name="cpf" data-mask="000.000.000-00" value="<?= $cpf ?>">
              </div>
              <div class="form-group col-6">
                <label for="birthday" class="col-form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $birthday ?>">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" onclick="ClearFields();">Limpar Campos</button>
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FIM --- Modal de Exclusão de Pacientes -->
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">

    <?= getAlerts(); ?>

    <div class="row">
      <?php //var_dump($patients); ?>
      <?php foreach($patients as $patient){?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <p class="card-text">
              <b>Nome: </b> <?=$patient->full_name?><br>
              <b>Nome da Mãe: </b> <?=$patient->mother_name?><br>
              <b>CPF: </b> <?=$patient->cpf?><br>
              <b>CNS: </b> <?=$patient->cns?><br>
              <b>CEP: </b> <?=$patient->cep?><br>
              <?php $address = $patient->address.' '.$patient->number.' '.$patient->complement.' - '.$patient->district.', '.$patient->city.' - '.$patient->state_abbr ?>
              <b>Endereço: </b> <?=$address?><br>
              <b>Localização: </b> <?=$patient->localization?><br>
              <b>Data de Nascimento: </b> <?=$patient->birthday?>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?= base_url("patient/edit/$patient->id") ?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalDelete<?=$patient->id?>"><i class="fas fa-trash-alt"></i> Excluir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal de Exclusão de Pacientes -->
      <div class="modal fade" id="modalDelete<?=$patient->id?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Excluir Paciente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            Caso prossiga com a exclusão do item, o mesmo não poderá ser mais recuperado. Deseja realmente excluir?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <form method="post" action="<?= base_url("patient/destroy") ?>" novalidate>
                <input value="<?=$patient->id?>" name="id" type="hidden">
                <button type="submit" class="btn btn-danger">Excluir</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- FIM --- Modal de Exclusão de Pacientes -->
      <?php } ?>
    </div>
  </div>
</main>

<script>
function ClearFields() {
  document.getElementById("full_name").value = "";
  document.getElementById("cns").value = "";
  document.getElementById("cpf").value = "";
  document.getElementById("bithday").value = "";
}
</script>