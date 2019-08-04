<div class="row">
								<!-- Members online -->
		<div class="col-lg-4">
				<div class="panel bg-teal-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li>
									<a data-action="reload" data-popup="tooltip" title="refresh" data-placement="top" data-container="body"></a>
								</li>
		                		<li>
		                			<a data-action="close" data-popup="tooltip" title="hilangkan" data-placement="top" data-container="body"></a>
		                		</li>
						     </ul>
					    </div>
						<div class="text-size-large">Currently you have requested :</div>
						<h2 class="no-margin">3 Tickets</h2>
					</div>
				<div class="container-fluid">
                 <div id="members-online"></div>
			   </div>
			   </div>
		</div>
								<!-- /members online -->

								<!-- Current server load -->
		<div class="col-lg-4">
				<div class="panel bg-pink-400">
						<div class="panel-body">
							<div class="heading-elements">
									<ul class="icons-list">
										<li>
											<a data-action="reload" data-popup="tooltip" title="refresh" data-placement="top" data-container="body"></a>
										</li>
				                		<li>
				                			<a data-action="close" data-popup="tooltip" title="hilangkan" data-placement="top" data-container="body"></a>
				                		</li>
								     </ul>
							    </div>
								<div class="text-size-large">Number of ticket that assigned to you:</div>
						<h2 class="no-margin">3 Tickets</h2>
						</div>
					 <div id="server-load"></div>
				</div>
		</div>
								<!-- /current server load -->

								<!-- Today's revenue -->
<div class="col-lg-4">
				<div class="panel bg-blue-400">
					<div class="panel-body">
						<div class="heading-elements">
							<ul class="icons-list">
								<li>
									<a data-action="reload" data-popup="tooltip" title="refresh" data-placement="top" data-container="body"></a>
								</li>
		                		<li>
		                			<a data-action="close" data-popup="tooltip" title="hilangkan" data-placement="top" data-container="body"></a>
		                		</li>
						     </ul>
					    </div>
                      <div class="text-size-large">You have resolved:</div>
						<h2 class="no-margin">3 Tickets</h2>
					</div>
				  <div id="today-revenue"></div>
				</div>
           </div>
</div>
					
		<div class="col-xs-12 col-sm-6 col-md-8">
		<div class="panel panel-flat">
					 <div class="panel-heading">
						<h2 class="panel-title">Service Desk Breaking News</h2>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li>
		  							<a data-action="collapse" data-popup="tooltip" title="sembunyikan" data-placement="top" data-container="body"></a>
		                		</li>
		                		<li>
									<a data-action="reload" data-popup="tooltip" title="refresh" data-placement="top" data-container="body"></a>
								</li>
		                		<li>
		                			<a data-action="close" data-popup="tooltip" title="hilangkan" data-placement="top" data-container="body"></a>
		                		</li>
		                	</ul>
	                	</div>
					</div>
					<div class="panel-body">
						
					</div>
					
					<div class="table-responsive">
						<table class="table table-responsive">
							<thead class="bg-slate-600">
								<tr>
									<th>Tanggal Posting</th>
									<th>Headline News</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php 
								$i= 1; foreach ($row as $get) : $i++; 
								?>
									<td><?php echo date('d-M-Y',$get->newsdate); ?></td>
									<td><?php echo $get->title; ?></td>
								    <td> <a href="<?= base_url('public').'/headline_news/read_news/'.$get->id; ?>"><i class="icon-forward"></i></a></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
				<script type="text/javascript">
					$(function() {
						$('.table-responsive').footable();
					});
				</script>
