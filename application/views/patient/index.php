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
      <?php for($i=0;$i<6;$i++){?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          <div class="card-body">
            <p class="card-text">
              <b>Nome: </b> Fulano de Tal Marques<br>
              <b>Nome da Mãe: </b> Tatiane Ana Vasques<br>
              <b>CPF: </b> 499.483.186-68<br>
              <b>CNS: </b> 320637027489155<br>
              <b>CEP: </b> 67907.737<br>
              <b>Endereço: </b> Travessa Verdara 549 Bloco A - do Norte, Vila Simão do Sul - SP<br>
              <b>Data de Nascimento: </b> 01/10/2013
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?php echo base_url('patients/edit') ?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a href="<?php echo base_url('patients/delete') ?>" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</main>