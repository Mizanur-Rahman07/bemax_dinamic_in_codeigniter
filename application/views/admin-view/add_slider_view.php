<?php $this->load->view('admin-view/header');?>


				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="typeahead">Sub Heading </label>
										<div class="controls">
											<input type="text" name="sub_heading"  class="span6 typeahead" id="typeahead">
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="typeahead"> Heading </label>
										<div class="controls">
											<input type="text" name="heading" class="span6 typeahead" id="typeahead">
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="fileInput">Image input</label>
										<div class="controls">
											<input class="input-file uniform_on" name="image"  id="fileInput" type="file">
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="typeahead"> Input Button </label>
										<div class="controls">
											<input type="text" name="button" class="span6 typeahead" id="typeahead">
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="typeahead"> Button Link </label>
										<div class="controls">
											<input type="text" name="button_link"  class="span6 typeahead" id="typeahead">
										</div>
									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="reset" class="btn">Cancel</button>
									</div>
								</fieldset>
							</form>

						</div>
					</div>
					<!--/span-->

				</div>
			</div>
			<!--/span-->

		</div>
		<!--/row-->



		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<div class="clearfix"></div>

		<footer>

			<p>
				<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
			</p>

		</footer>

		<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery-migrate-1.0.0.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.ui.touch-punch.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/modernizr.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/bootstrap.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.cookie.js"></script>

		<script src='<?php echo base_url(); ?>backend-dashboard-master/fullcalendar.min.js'></script>

		<script src='<?php echo base_url(); ?>backend-dashboard-master/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/excanvas.js"></script>
		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.flot.stack.js"></script>
		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.flot.resize.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.chosen.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.uniform.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.cleditor.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.noty.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.elfinder.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.raty.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.iphone.toggle.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.uploadify-3.1.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.gritter.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.imagesloaded.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.masonry.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.knob.modified.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/jquery.sparkline.min.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/counter.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/retina.js"></script>

		<script src="<?php echo base_url(); ?>backend-dashboard-master/custom.js"></script>
		<!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:06 GMT -->

</html>