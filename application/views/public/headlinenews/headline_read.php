 <style type="text/css">.panel-new{background-color:#00FFFF; text-align:left; padding:4px;font-style: initial;background-repeat:no-repeat;background-attachment:fixed;white-space-collapse: break-all;border: 5px solid #FFFFDD;font-family: Arial, Helvetica, sans-serif;}</style>  
                
                <div class="row">
					<div class="col-md-12">
						<div class="panel panel-body">
							<div class="media">
								<div class="media-left">
									<a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
								</div>

								<div class="media-body">
                <h6 class="media-heading text-semibold"><a href="#" class="text-default">Helpdesk Breaking News</a></h6>
								</div>
						<div class="panel panel-new">
							<div class="panel-body text-left">
								<h5 class="text-semibold">From :&nbsp; <?php echo $createdby; ?></h5>
								<p class="mb-15"><?php echo $createdon; ?></p>
								<h2 class="mb-15"><p><?php echo $title; ?></p></h2>
								<h5 class="text-semibold"><?php echo $detail; ?></h5>
							</div>
						<div class="panel-body text-left">
						<a href="<?= site_url('public').'/headline_news/getHeadlineNews' ?>">
						   <i class="icon-undo">&nbsp;Back</i>
						</a>
						</div>
						</div>
							</div>
						</div>
					</div>					
                </div>