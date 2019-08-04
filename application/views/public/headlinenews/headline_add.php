       <div class="row">
					<div class="col-md-9">
						
	<form class="form-horizontal" action="<?php echo $action; ?>" method="post">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<h5 class="panel-title">Headline News</h5>
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
        <label class="col-lg-3 control-label">News Date: </label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
		<input type="text" name="newsdate" class="form-control pickadate-strings" placeholder="<?php echo date('d-M-Y',time()); ?>" value="<?php echo $newsdate; ?>">
		   <?php echo form_error('newsdate') ?>
		</div>
		</div>
        </div>
	    </div>
 
        <div class="form-group">
        <label class="col-lg-3 control-label">Headline News:</label>
        <div class="col-lg-9">
        <input type="text" name="title" class="form-control" placeholder="Enter headline" value="<?php echo $title; ?>">
        <?php echo form_error('title') ?>
        </div>
        </div>

											

        <div class="form-group">
        <label class="col-lg-3 control-label">News Detail:</label>
        <div class="col-lg-9">
        <textarea name="detail" rows="5" cols="5" class="form-control" placeholder="Enter Headline News"><?php echo $detail; ?></textarea>
        <?php echo form_error('detail') ?>
        </div>
        </div>

        <div class="form-group">
        <label class="col-lg-3 control-label">Expired News:</label>
        <div class="col-lg-9">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="expired" class="form-control pickadate-strings" placeholder="<?php echo date('d-M-Y',time()); ?>" value="<?php echo $expired; ?>">
        <?php echo form_error('expired') ?>
        </div>
        </div>
        </div>
        </div>

        <div class="text-right">
        <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
        <input type="submit" class="btn btn-primary" value="Submit"> 
        <a href="<?php echo site_url('public/Headline_news') ?>" class="btn btn-default">Cancel</a>
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
               });
                </script>
