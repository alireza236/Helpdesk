<form class="form-horizontal" action="<?php echo $action; ?>" method="post" name="projectform"  onsubmit="return project();">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Project</h5>
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
					                <i class="icon-truck position-left"></i> Form Tambah Projek</legend>
										<div class="form-group">
											<label class="col-lg-3 control-label">Nama project:</label>
											<div class="col-md-6">
												<input type="text" name="projectname" value="<?php echo $projectname ?>" placeholder="" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Customer:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-15">
														
          
            <select data-placeholder="pilih customer" name="idcustomer" class="select">
                  <option value="<?php echo $idcustomer; ?>"><?php echo $namacustomer; ?></option>
            	 <?php foreach ( $customerdata as $row): ?>
            	 	<option value="<?php echo $row->idcustomer; ?>"><?php echo $row->namacustomer;?></option>
            	 <?php endforeach ?>
            </select>


							                            </div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Tanggal pengiriman:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="deliverybegin" value="<?php echo $deliverybegin ?>" placeholder="tanggal dimulai" class="form-control pickadate-strings">
														<?php echo form_error('deliverybegin') ?>
													</div>

													<div class="col-md-6">
														<input type="text" name="deliveryend" value="<?php echo $deliveryend; ?>" placeholder="sampai dengan" class="form-control pickadate-strings">
														<?php echo form_error('deliveryend') ?>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Tanggal penginstalan:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="installbegin" value="<?php echo $installbegin; ?>" placeholder="tanggal dimulai" class="form-control pickadate-strings">
														<?php echo form_error('installbegin') ?>
													</div>

													<div class="col-md-6">
														<input type="text" name="installend" value="<?php echo $installend; ?>" placeholder="sampai dengan" class="form-control pickadate-strings">
														<?php echo form_error('installend') ?>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">UAT Date:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="uatbegin" value="<?php echo $uatbegin; ?>" placeholder="tanggal dimulai" class="form-control pickadate-strings">
														<?php echo form_error('uatbegin') ?>
													</div>

													<div class="col-md-6">
														<input type="text" name="uatend" value="<?php echo $uatend; ?>" placeholder="sampai dengan" class="form-control pickadate-strings">
														<?php echo form_error('uatend') ?>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Bill Date:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" name="billstartdate" value="<?php echo $billstartdate; ?>" placeholder="tanggal dimulai" class="form-control pickadate-strings">
														<?php echo form_error('billstartdate') ?>
													</div>

													<div class="col-md-6">
														<input type="text" name="billduedate" value="<?php echo $billduedate; ?>" placeholder="sampai dengan" class="form-control pickadate-strings">
														<?php echo form_error('billduedate') ?>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-lg-3 control-label">Masa garansi (Tahun):</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-10">
								      <select data-placeholder="masa jangka garansi (Tahun)" name="warrantyperiod" value="<?php echo $warrantyperiod; ?>" class="select">
								                         <script>
														 for (var i=1;i<=3;i++)
														 {document.write("<option value=" + i + ">" + i + "</option>");}
														 </script>
								                         </select>
							                            </div>
													</div>
												</div>
											</div>
										</div>


										<div class="form-group">
											<label class="col-lg-3 control-label">Tanggal ikat kontrak (Bulan):</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" placeholder="tanggal mulai masa kontrak" name="contractstartdate" value="<?php echo $contractstartdate; ?>" class="form-control pickadate-strings">
														<?php echo form_error('contractstartdate') ?>
													</div>

													<div class="col-md-6">
                                                     <div class="mb-15">
		<select data-placeholder="masa jangka kontrak (Bulan)" name="contractperiod" value="<?php echo $contractperiod; ?>" class="select">
								                         <script>
														 for (var i=1;i<=36;i++)
														 {document.write("<option value=" + i + ">" + i + "</option>");}
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
							<input type="hidden" name="projectid" value="<?php echo $projectid; ?>">
							<input type="submit" value="Submit" class="btn btn-primary">
							<a href="<?php echo site_url('public/project') ?>" class="btn btn-default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
				 <script type="text/javascript">
				 function project(){
		         	if (projectform.projectname.value == ""){
		         		$.jGrowl('MAAF nama projek tidak boleh kosong', {
		         			header: 'Peringatan !',
		         			theme: 'bg-warning'
		         		});
					    projectform.projectname.focus();
					    return false;
				    }
        		 }					
				</script>	

  
			<script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        formatSubmit: 'dd/mm/yyyy',
                    });  
               });
             </script>

                