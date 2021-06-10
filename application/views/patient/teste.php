<?php if(validation_errors()){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= validation_errors('<h20>', '</h20> / '); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
      <?php } ?>