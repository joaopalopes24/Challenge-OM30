  <footer class="main-footer">
    <?php
      date_default_timezone_set('America/Sao_Paulo');
      $date = date('Y');
    ?>
    <strong>Copyright &copy; <?php echo "$date" ?> - 
    <a href="https://github.com/joaopalopes24/Desafio-OM30" target="_blank">
      João Pedro Lopes.
    </a></strong> 
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline">
      <strong>Versão</strong> 1.0.0
    </div>
  </footer>
</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url() ?>assets/toastr/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/toastr/toastr.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- Stylesheets -->
<script src="<?php echo base_url() ?>assets/dist/js/locastyle.js"></script>

<script>
  // JavaScript code to disable form submission if there are invalid fields
  (function() {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

</body>
</html>