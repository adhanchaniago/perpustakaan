

		<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.1.1.min.js'; ?>"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/blockUI/jquery.blockUI.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/iCheck/jquery.icheck.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/moment/min/moment.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootbox/bootbox.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/jquery.appear/jquery.appear.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/jquery-cookie/jquery.cookie.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/velocity/jquery.velocity.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/TouchSwipe/jquery.touchSwipe.min.js'; ?>"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="<?php echo base_url().'assets/plugins/owl-carousel/owl-carousel/owl.carousel.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/jquery-mockjax/jquery.mockjax.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/toastr/toastr.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-modal/js/bootstrap-modal.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-select/bootstrap-select.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/jquery-validation/dist/jquery.validate.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/DataTables/media/js/jquery.dataTables.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/DataTables/media/js/DT_bootstrap.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/truncate/jquery.truncate.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/summernote/dist/summernote.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/bootstrap-daterangepicker/daterangepicker.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/js/subview.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/js/subview-examples.js'; ?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script type="text/javascript" src="<?php echo base_url().'assets/plugins/select2/select2.min.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/tableExport.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/jquery.base64.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/html2canvas.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/jquery.base64.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/jspdf/libs/sprintf.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/jspdf/jspdf.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/plugins/tableExport/jspdf/libs/base64.js'; ?>"></script>
		<script src="<?php echo base_url().'assets/js/table-export.js'; ?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="<?php echo base_url().'assets/js/main.js'; ?>"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				TableExport.init();
			});
		</script>
		

		
		
		<!--
<button data-toggle="dropdown" class="btn btn-green dropdown-toggle">
														Export <i class="fa fa-angle-down"></i>
													</button>
													<ul class="dropdown-menu dropdown-light pull-right">
														<li>
															<a href="#" class="export-pdf" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as PDF
															</a>
														</li>
														<li>
															
														</li>
														<li>
															<a href="#" class="export-csv" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as CSV
															</a>
														</li>
														<li>
															<a href="#" class="export-txt" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as TXT
															</a>
														</li>
														<li>
															<a href="#" class="export-xml" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as XML
															</a>
														</li>
														<li>
															<a href="#" class="export-sql" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as SQL
															</a>
														</li>
														<li>
															<a href="#" class="export-json" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Save as JSON
															</a>
														</li>
														<li>
															<a href="#" class="export-excel" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Excel
															</a>
														</li>
														<li>
															<a href="#" class="export-doc" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to Word
															</a>
														</li>
														<li>
															<a href="#" class="export-powerpoint" data-table="#sample-table-2" data-ignoreColumn ="3,4">
																Export to PowerPoint
															</a>
														</li>
													</ul>
												</div>
		-->
<html>	
<table class="table table-striped table-hover" >
 <tbody>
 <a href="#" class="export-png" data-table="#sample-table-2" data-ignoreColumn ="3,4">
 <button class='btn btn-primary'>Save as PNG</button>
 </a>
 <head id="sample-table-2">
 <head>
 <style type="text/css">
table{

	padding:2px;
    border-radius: 10px;
}
td {
font-size:8px; color:white;  font-family: 'Arial Bold';
	font-style: normal;
	font-variant: normal;
	font-weight: 50;'
}
 </style>
 </head>
 <body>
 <div class="head">
 <?php

 ?>
 </div>
 <?php
 if(count($member )>0)
 {
 foreach($member as $member)
 {
 ?>
 <div id="body">
 <?php
 echo "<form name='octav'>
 <table  id='sample-table-2' border='0' style='width:242px; height:151px;'  background='".base_url('assets/images/uk_kta_belakang.png')."'>
 <tr>
 <td align='center'  colspan='4' >
 <p style='font-size:10px; color:white; font-family: 'Arial Bold';
	font-style: normal;
	font-variant: normal;
	font-weight: 200;'>
PERHATIAN
 </a>
 </p>
 </td>
 </tr>
 <tr><td colspan='3'><br></td></tr>
 <tr><td valign='baseline' style='padding-left:2em'>1.<td colspan='3' valign='baseline' style='padding-right:1em'>Kartu ini adalah kartu tanda anggota perpustakaan mezagus</td></tr>
 <tr><td valign='baseline' style='padding-left:2em'>2.<td colspan='3' valign='baseline' style='padding-right:1em'>Kartu ini berlaku selama menjadi member</td></tr>
 <tr><td valign='baseline' style='padding-left:2em'>3.<td colspan='3' valign='baseline' style='padding-right:1em'>Apabila kartu ini hilang, harap segera melapor ke perpustakaan mezagus</td></tr>
 <tr><td valign='baseline' style='padding-left:2em'>4.<td colspan='3' valign='baseline' style='padding-right:1em'>Apabila menemukan kartu ini harap segera mengembalikan ke perpustakaan mezagus</td></tr>
 <tr><td colspan='3'><br></td></tr>
 <tr><td colspan='3'><br></td></tr>
 </form>
 "
 ?>
 
 <?php
 }
 }
 ?>
 </div>
 </body>
</html>


<div id="readNote">
				<div class="barTopSubview">
					<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i></a>
				</div>
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="panel panel-note">
						<div class="e-slider owl-carousel owl-theme">
							<div class="item">
								
							</div>
							<div class="item">
							
							</div>
							<div class="item">
							
							</div>
						</div>
					</div>
				</div>
			</div>