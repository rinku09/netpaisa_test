<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/plugins/jquery.dataTables.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/plugins/dataTables.bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/bootstrap.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.dcjqaccordion.2.7.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/scripts.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.slimscroll.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/jquery.nicescroll.js'; ?>"></script>

<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script src="<?php echo base_url().'assets/admin/js/plugins/pace.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/js/main.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/plugins/bootstrap-datepicker.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/plugins/select2.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/plugins/bootstrap-datepicker.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/jquery.table2excel.js'; ?>"></script>




<script type="text/javascript">
      $('#sl').click(function(){
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
      });
      $('#demoSelect').select2();
    </script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

    <!-- Reset Value of form -->
    <script>
      function myFunction() {
          document.getElementById("myForm").reset();
        }
    </script>
</body>
</html>