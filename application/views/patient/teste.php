<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
  <div class="card bg-light d-flex flex-fill">
    <div class="card-header text-muted border-bottom-0">
      Paciente 1
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-7">
          <h2 class="lead"><b>Sra. Bianca Lourenço Jr.</b></h2>
          <p class="text-muted text-sm">
            <b>Nome da Mãe: </b> Tatiane Ana Vasques
            <br>
            <b>CPF: </b> 499.483.186-68
            <br>
            <b>CNS: </b> 320637027489155
            <br>
            <b>CEP: </b> 67907.737
            <br>
            <b>Endereço: </b> Travessa Verdara 549 Bloco A - do Norte, Vila Simão do Sul - SP
            <br>
                        <b>Data de Nascimento: </b> 01/10/2013
          </p>
        </div>
        <div class="col-5 text-center">
                    <img src="http://localhost:8000/plugins/images/userX.png" alt="Foto de Perfil do Usuário" class="img-circle img-fluid">
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="text-right">
        <a href="http://localhost:8000/patient/1" class="btn btn-sm bg-teal">
          <i class="far fa-eye"></i>
        </a>
                  <a href="http://localhost:8000/patient/1/edit" class="btn btn-sm bg-primary">
            <i class="fas fa-pencil-alt"></i>
          </a>
                          <a href="#" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#modal-default1">
            <i class="fas fa-trash-alt"></i>
          </a>
              </div>
      <div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Excluir Paciente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Caso prossiga com a exclusão do item, o mesmo não poderá ser mais recuperado. Deseja realmente excluir?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <form method="post" action="http://localhost:8000/patient/1" novalidate="">
          <input type="hidden" name="_method" value="delete">          <input type="hidden" name="_token" value="68Ya7xSfJRvr0X9uq8gOtiWz8tCeWmeO3JVUUMwc">          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>    </div>
  </div>
</div>




<div class="invalid-feedback">
              Campo Obrigatório!
            </div>
            <div class="valid-feedback">
              OK!
            </div>