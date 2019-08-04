<style type="text/css">.errormsg {font-size:10pt;color:#ff0000;text-align:left;}</style>
<form class="form-horizontal" action="<?php echo $action; ?>" method="post" name="slaform"  onsubmit="return project();">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Service Level Agreement (SLA)</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
 
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<fieldset>
					                <legend class="text-semibold">
					                <i class="icon-truck position-left"></i>SLA Setting</legend>
					                <!-- <div class="form-group">
					                											<label class="col-lg-3 control-label">SLA Level:</label>
					                											<div class="col-lg-9">
					                												<div class="row">
					                													<div class="col-md-6">
					                														<div class="mb-10">
					                							<select data-placeholder="" name="slaid" value="<?php echo $slaid; ?>" class="form-control select">
					                                                <script> 
					                                                     for (var i=1;i<=10;i++){
					                                                        document.write("<option value=" + i + ">" + i + "</option>");}
					                                                </script>                     
					                                            </select>
					                							                            </div>
					                													</div>
					                												</div>
					                											</div>
					                										</div> -->

										
										<div class="form-group">
											<label class="col-lg-3 control-label">Nama SLA:</label>
											<div class="col-md-6">
					<input type="text" name="namasla" value="<?php echo $namasla; ?>" placeholder="" class="form-control">
					<?php echo form_error('namasla') ?>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Kategori SLA<b><i></i></b> :</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-10">
						<select  name="kategori_sla" value="" class="form-control select">
                              <option value="low">Low</option>
                              <option value="medium">Medium</option>
                              <option value="high">High</option>
                              <option value="urgency">Urgency</option>
					    </select> <?php echo form_error('kategori_sla') ?>
							                            </div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Respon Waktu <b><i>(dalam jam)</i></b> :</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-10">
						<select data-placeholder="" name="responsetime" value="" class="form-control select">
                              <script> 
                                for (var i=1;i<=24;i++){
                              	  document.write("<option value=" + i + ">" + i + "</option>");}
							  </script>
					    </select>
							                            </div>
													</div>
												</div>
											</div>
										</div>

										

										<div class="form-group">
											<label class="col-lg-3 control-label">Resolusi Waktu <b><i>(dalam jam)</i></b> :</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-10">
			<select data-placeholder="" name="resolutiontime" value="" class="form-control select">
                  <script> 
                     for (var i=1;i<=999;i++){
                  	   document.write("<option value=" + i + ">" + i + "</option>");}
				 </script>
            </select>
							                            </div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
								<label class="col-lg-3 control-label">Masa Tenggang SLA <b><i>(dalam jam)</i></b> :</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-10">
       <select data-placeholder="" name="slawarning" value="" class="form-control select">
            <script> 
				for (var i=1;i<=999;i++){
					document.write("<option value=" + i + ">" + i + "</option>");}
			</script>                   
       </select>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
							<!-- <input type="hidden" name="slaid" value="<?php echo $slaid;  ?>"> -->
							<input type="submit" value="Submit" class="btn btn-primary">
							<a href="<?php echo site_url('public/sla') ?>" class="btn btn-default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
				 
				 <script type="text/javascript">
				 function project(){
		         	if (slaform.namasla.value == ""){
		         		 new PNotify({
				              title: "PERHATIAN.!",
				              text: "NAMA SLA TIDAK BOLEH KOSONG..!!",
				              width: "100%",
				              cornerclass: "no-border-radius",
				              addclass: "stack-custom-top bg-danger",
				            });
					    slaform.namasla.focus();
					    return false;
				    }
        		 }					
				</script>
			

                