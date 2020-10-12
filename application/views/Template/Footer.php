</main>

	<script src="<?php echo base_url(); ?>pages\assets\js\jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\popper.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\perfect-scrollbar.js"></script>
	<script src="<?php echo base_url();?>pages\assets\js\moment.min.js"></script>

	<script src="<?php echo base_url(); ?>pages\assets\js\jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\jquery.mask.min.js"></script> 
	<script src="<?php echo base_url(); ?>pages\assets\inputmask\jquery.inputmask.bundle.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\inputmask.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\select2.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>pages\assets\js\Chart.bundle.min.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>pages\assets\js\widgets.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>pages\assets\js\clients.js"></script> -->
	<!-- <script src="<?php echo base_url(); ?>pages\assets\js\Chart.Financial.js"></script> -->
	<script src="<?php echo base_url(); ?>pages\assets\js\d3.v3.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\topojson.v1.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\datatables.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\data-tables.js"></script>
	<!-- <script src="<?php echo base_url(); ?>pages\assets\js\toastr.min.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\toast.js"></script> -->
	<script src="<?php echo base_url(); ?>pages\assets\js\framework.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\settings.js"></script>
	<script src="<?php echo base_url(); ?>pages\assets\js\jquery.mask.min.js"></script> 
	<script src="<?php echo base_url(); ?>pages\assets\inputmask\jquery.inputmask.bundle.js"></script>
    <script src="<?php echo base_url(); ?>pages\assets\js\inputmask.js"></script>


	
	<script src="<?= base_url().'pages/assets/js/custom-input-validation.js' ?>"></script>



 	

	<script  type="text/javascript">  
		function numbersOnly(e) {
			var x = e.which || e.keycode;
		    return ((x >= 48 && x <= 57)) ? true : false;
		}
		
		$(document).ready(function() {
		 	
		 	$(document).on("keypress", ".numbersonly", function(e){
				var keyCode = e.which;
				if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 13) {
				e.preventDefault();
				}
			});
			
			$(document).on("keypress", ".withoutspace", function(e){
				var keyCode = e.which;
				if ( !( (keyCode >= 48 && keyCode <= 59) || (keyCode >= 97 && keyCode <= 122 ) || (keyCode >= 64 && keyCode <= 90 || (keyCode >= 33 && keyCode <= 47 ) )) &&  keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".percentage", function(e){
				var keyCode = e.which;
				if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 13 && keyCode != 46) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".letterswithspace", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".letterswithdotandcomma", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32 && keyCode != 46 && keyCode != 44) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".lettersonly", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".alphanumericwithspace", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 32 && keyCode != 13) {
				e.preventDefault();
				}
			});
			
			$(document).on("keypress", ".alphanumericwithspacecompany", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode >= 40 && keyCode <= 41) ||  (keyCode >= 44 && keyCode <= 46)) && keyCode != 32) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".alphanumeric", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".accountnumber", function(e){
				var keyCode = e.which;
				if ( !( (keyCode >= 48 && keyCode <= 57) ) && keyCode != 8 && keyCode != 45 && keyCode != 32 && keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".accntnumberformat", function(e){
				var keyCode = e.which;
				if ( keyCode != 48 && keyCode != 8 && keyCode != 45 && keyCode != 32 && keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".restrictspecchar", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 45 && keyCode != 39 && keyCode != 8 && keyCode != 32 && keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".letterswithspacenameperiod", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32 && keyCode != 46) {
				e.preventDefault();
				}
			});
				$(document).on("keypress", ".letterswithspacemiddlenamedash", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32 && keyCode != 45) {
				e.preventDefault();
				}
			});
			
			$(document).on("keypress", ".alphanumericwithspaceunithouse", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode >= 40 && keyCode <= 41) || (keyCode >= 44 && keyCode <= 46)) && keyCode != 32  && keyCode != 35  && keyCode != 13) {
				e.preventDefault();
				}
			});	

			$(document).on("keypress", ".specchar", function(e){
				var keyCode = e.which;

				if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) 
					&& keyCode != 45 && keyCode != 39
					&& keyCode != 46 && keyCode != 44
					&& keyCode != 47 && keyCode != 35 
					&& keyCode != 8 && keyCode != 32
					&& keyCode != 13) {
				e.preventDefault();
				}
			});

			$(document).on("keypress", ".otherfield", function(e){
				var keyCode = e.which;

				if (!(keyCode >= 48 && keyCode <= 57) && keyCode != 39 && keyCode != 40 && keyCode != 41 && keyCode != 44 && keyCode != 45 && keyCode != 46 && keyCode != 8 && keyCode != 32 && keyCode != 13 && !(keyCode >= 65 && keyCode <= 90) && !(keyCode >= 97 && keyCode <= 122)) {
				e.preventDefault();
				}
			});

		$(document).on("keypress", ".restrictspecchar", function(e){
		    var keyCode = e.which;

		    if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) && keyCode != 45 && keyCode != 39 && keyCode != 8 && keyCode != 32 && keyCode != 13) {
		      e.preventDefault();
		    }
		});

		$(document).on("keypress", ".letterswithspacenameperiod", function(e){
		    var keyCode = e.which;

		    if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32 && keyCode != 46) {
		      e.preventDefault();
		    }
		});
			$(document).on("keypress", ".letterswithspacemiddlenamedash", function(e){
		    var keyCode = e.which;

		    if ( !( (keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) )  && keyCode != 13 && keyCode != 8 && keyCode != 32 && keyCode != 45) {
		      e.preventDefault();
		    }
		});
		
		$(document).on("keypress", ".alphanumericwithspaceunithouse", function(e){
		    var keyCode = e.which;

		    if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode >= 40 && keyCode <= 41) || (keyCode >= 44 && keyCode <= 46)) && keyCode != 32  && keyCode != 35  && keyCode != 13) {
		      e.preventDefault();
		    }
		});	

		$(document).on("keypress", ".specchar", function(e){
		    var keyCode = e.which;

		    if ( !( (keyCode >= 48 && keyCode <= 57) ||(keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) ) 
		    	&& keyCode != 45 && keyCode != 39
		    	&& keyCode != 46 && keyCode != 44
		    	&& keyCode != 47 && keyCode != 35 
		    	&& keyCode != 8 && keyCode != 32
		    	&& keyCode != 13) {
		      e.preventDefault();
		    }
		});

		$(document).on("keypress", ".otherfield", function(e){
		    var keyCode = e.which;

		    if (!(keyCode >= 48 && keyCode <= 57) && keyCode != 39 && keyCode != 40 && keyCode != 41 && keyCode != 44 && keyCode != 45 && keyCode != 46 && keyCode != 8 && keyCode != 32 && keyCode != 13 && !(keyCode >= 65 && keyCode <= 90) && !(keyCode >= 97 && keyCode <= 122)) {
		      e.preventDefault();
		    }
		});

		});
	</script>
</body>

