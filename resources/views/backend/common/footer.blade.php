       <footer class="app-footer">
          <!--<ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>-->
          <div class="copyright"> Copyright © 2022. All right SONEX CRM. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    
    <script src="assets2/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <script src="assets2/vendor/flatpickr/flatpickr.min.js"></script>
	<script src="assets2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets2/vendor/pace-progress/pace.min.js"></script>
	<script src="assets2/vendor/flatpickr/plugins/monthSelect/index.js"></script>
    <script src="assets2/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets2/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets2/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets2/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets2/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <script src="assets2/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets2/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <script src="assets2/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <script src="assets2/vendor/vanilla-text-mask/vanillaTextMask.js"></script>
    <script src="assets2/vendor/text-mask-addons/textMaskAddons.js"></script>
    <script src="assets2/javascript/pages/steps-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <script src="assets2/vendor/summernote/summernote-bs4.min.js"></script>
    
<script>
  function change_status(id, status, url){
	  if(status == 0){
		  status = 1;
	  }else{
		  status = 0;
	  }	 
	$.ajax({
		   url: ''+url,
		   type: 'POST',
		   data: {'status': status, 'id': id},
		   success: function result(data){
			   if(data == 1){
				   location.reload();
			   }
		   }
	});
}

function change_status_permanently(id, status, url){
	if (confirm("Are you sure you want to Permanently Delete this Consignment Detail?") == true) {
		$.ajax({
		   url: ''+url,
		   type: 'POST',
		   data: {'status': status, 'id': id},
		   success: function result(data){
			   location.reload();
			} 
	}); 
  }
}
</script>  
</body>
</html>