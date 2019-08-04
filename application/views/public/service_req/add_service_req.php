       <div class="row">
					<div class="col-md-9">
						
	<form class="form-horizontal" action="" method="post">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<h5 class="panel-title">Help Request</h5>
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li><a data-action="collapse"></a></li>
							                		<li><a data-action="reload"></a></li>
							                		<li><a data-action="close"></a></li>
							                	</ul>
						                	</div>
										</div>
									</div>
								</div>

<div class="panel-body">
   <div class="row">
     <div class="col-md-10 col-md-offset-1">
        
     

        <div class="form-group">
        <label class="col-lg-3 control-label">Request Type:</label>
        <div class="col-lg-9">
          <select data-placeholder="" value="" name="idcustomer" id="idcustomer" class="select-minimum">
                <option>IT Request</option>
                <option>Finance</option>
                <option>HR Request</option>
                <option>Equipment</option>
            </select> 
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Subject: </label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="newsdate" class="form-control" placeholder="" value="">
            
        </div>
        </div>
        </div>
        </div>

       
 
        <div class="form-group">
        <label class="col-lg-3 control-label">Request Detail:</label>
        <div class="col-lg-9">
        <textarea name="detail" rows="5" cols="5" class="form-control" placeholder="Enter Headline News"></textarea>
        
        </div>
        </div>





        <div class="text-right">
        <input type="hidden" name="id" value="" /> 
        <input type="submit" class="btn btn-primary" value="Submit"> 
        <a href="<?php echo site_url('public/servicerequest') ?>" class="btn btn-default">Cancel</a>
        </div>

       </div>
       </div>
       </div>
       </div>
</form>


				</div>
				</div>
                
                <script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        showMonthsShort: true,
                        formatSubmit: 'dd/mm/yyyy',
                        hiddenPrefix: 'prefix__',
                        hiddenSuffix: '__suffix'
                    });  

                 $(".select-minimum").select2();
               });


          
                </script>
