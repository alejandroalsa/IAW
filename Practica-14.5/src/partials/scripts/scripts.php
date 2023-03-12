<!-- Vendor JS Files -->
  <script src="/assets/vendor/apexGraficas/apexGraficas.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/eGraficas/eGraficas.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-dataTablas/simple-dataTablas.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

<!-- Hora Actual -->
  <script>
    setInterval(function() {
      var horaActual = new Date();
      document.getElementById("hora").innerHTML = horaActual.toLocaleTimeString();
    }, 1000);
  </script>
