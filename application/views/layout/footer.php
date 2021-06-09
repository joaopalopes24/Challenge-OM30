<?php
  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y');
?>
<footer class="footer mt-auto py-3">
  <div class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <strong>Copyright &copy; <?php echo "$date" ?> -
      <a href="https://github.com/joaopalopes24/Desafio-OM30" target="_blank">
        João Pedro Lopes.
      </a></strong>
    Todos os direitos reservados.
  </div>
</footer>

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

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