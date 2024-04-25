	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © OAE Company</small>
        </div>
      </div>
  </footer>

  <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../../vendor/jquery.selectbox-0.2.js"></script>
    <script src="../../vendor/retina-replace.min.js"></script>
    <script src="../../vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/admin.js"></script>
  <!-- Custom scripts for this page-->
    <script src="../../js/admin-charts.js"></script>
    <script src="../../vendor/dropzone.min.js"></script>
    <script src="nicEdi.js"></script>
    <script type="text/javascript">
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
      }
      function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blas')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
      }
      function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blaa')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
      }
      function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#product')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
      }

      document.getElementById("add_account").style.display = "none";
      document.getElementById("display_account").style.display = "block";
      
      function add() {
        document.getElementById("add_account").style.display = "block";
        document.getElementById("display_account").style.display = "none";
      }
      function redisplay() {
        document.getElementById("add_account").style.display = "none";
        document.getElementById("display_account").style.display = "block";
      }

      



    </script>
