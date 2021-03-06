<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <a class="navbar-brand" href="<?= base_url() ?>" style="margin-left: 10px;">
      <img style="object-fit:contain;" height="50px" src="<?= base_url("assets/images/logo.png") ?>">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <button type="button" class="btn btn-light my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#modalPhoto"><i class="fas fa-plus"></i> Editar Foto</button>
    </div>
  </nav>
</header>
<main role="main" class="flex-shrink-0">
  <div class="container">
  <div class="row">
    <div class="col-md-12 mb-3">
      <h4 class="mb-2 my-4">Editar Paciente</h4>

      <?= getAlerts(); ?>

      <form id="form-edit-patient" class="needs-validation" method="post" enctype="multipart/form-data" onsubmit="return false" novalidate>
        <!-- Modal de Editar Foto -->
        <div class="modal fade" id="modalPhoto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Editar Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <?php !$patient->photo ? $url = base_url("assets/images/user.jpeg") : $url = base_url("uploads/patient/$patient->photo") ; ?>
                  <img id="previewImg" src="<?= $url ?>" class="bd-placeholder-img card-img-top mb-3" alt="Foto de Perfil do Usu??rio">
                  <label for="photo"><b>Foto de Perfil (tamanho m??ximo 12MB)</b></label>
                  <input class="form-control-file" id="photo" type="file" name="photo" onchange="previewFile(this);">
                  <?= feedback('photo',false) ?>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="not_photo" name="not_photo" onclick="notPhoto()">
                    <label for="not_photo" class="custom-control-label">Sem Foto</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- FIM --- Modal de Editar Foto -->
        <input value="<?=$patient->id?>" name="id" type="hidden">
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="full_name">Nome Completo</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nome Completo" value="<?=$patient->full_name?>" required>
            <?= feedback('full_name') ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="mother_name">Nome da m??e</label>
            <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nome da m??e" value="<?=$patient->mother_name?>" required>
            <?= feedback('mother_name') ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="birthday">Data de Nascimento</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$patient->birthday?>" required>
            <?= feedback('birthday') ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-1">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="SOMENTE N??MEROS" data-mask="000.000.000-00" value="<?=$patient->cpf?>" required>
            <?= feedback('cpf') ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cns">CNS</label>
            <input type="text" class="form-control" id="cns" name="cns" placeholder="SOMENTE N??MEROS" data-mask="000 0000 0000 0000" value="<?=$patient->cns?>" required>
            <?= feedback('cns') ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="SOMENTE N??MEROS" data-mask="00000-000" onblur="pesquisacep(this.value);" value="<?=$patient->cep?>" required>
            <?= feedback('cep') ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="address">Rua / Avenida</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Rua / Avenida" value="<?=$patient->address?>" required>
            <?= feedback('address') ?>
          </div>
          <div class="col-md-3 mb-1">
            <label for="number">N??mero</label>
            <input type="number" class="form-control" id="number" name="number" placeholder="N??mero" value="<?=$patient->number?>" required>
            <?= feedback('number') ?>
          </div>
          <div class="col-md-4 mb-1">
            <label for="complement">Complemento</label>
            <input type="text" class="form-control" id="complement" name="complement" placeholder="Complemento" value="<?=$patient->complement?>" >
            <?= feedback('complement',false) ?>
          </div>
        </div>
        <input value="<?=$patient->localization?>" name="localization" type="hidden">
        <div class="row">
          <div class="col-md-5 mb-1">
            <label for="district">Bairro</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" value="<?=$patient->district?>" required>
            <?= feedback('district') ?>
          </div>
          <div class="col-md-5 mb-1">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="<?=$patient->city?>" required>
            <?= feedback('city') ?>
          </div>
          <div class="col-md-2 mb-1">
            <label for="state_abbr">Estado</label>
            <select class="custom-select d-block w-100" id="state_abbr" name="state_abbr" required>
              <?= select_state_abbr($patient->state_abbr) ?>
            </select>
            <?= feedback('state_abbr') ?>
          </div>
        </div>
        <hr class="mb-2">
        <div class="row">
          <div class="col-sm-6">
            <a href="<?= base_url() ?>" class="btn btn-secondary btn-block mb-2" type="submit">Voltar</a>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-success btn-block mb-2" type="submit">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
</main>

<script>
  function notPhoto() {
    if($('#not_photo').is(':checked')) {
      $('#photo').prop('disabled',true);
      $("#previewImg").css("display","none");
    } else {
      $('#photo').prop('disabled',false);
      $("#previewImg").css("display","block");
    }
  }
  
  function previewFile(input){
    var file = $("input[type=file]").get(0).files[0];

    if(file){
      var reader = new FileReader();
      reader.onload = function(){
        $("#previewImg").attr("src", reader.result);
      }
      reader.readAsDataURL(file);
    }
  }

  $('form').on('submit', async function(e){
    await axios.post('<?= base_url("patient/update") ?>',$(this).serialize())
      .then(function(response){
        validateForm('#form-edit-patient',response.data);
      })
      .catch(function(error){
        console.log(error);
      });
    e.preventDefault();
    return false;
  })

  function requestInput(name){
    axios.post('<?= base_url("patient/update") ?>',$('#' + name).serialize())
      .then(function(response){
        validateInput(name,response.data.list_errors);
      })
      .catch(function(error){
        console.log(error);
      });
  }

  $(document).ready(function(){
    $('form#form-edit-patient :input').each(function(){
      $(this).change(function(){
        requestInput($(this).attr('id'))
      });    
    });
  });
</script>