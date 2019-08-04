<div class="col-md-6">
						<!-- form  -->
			<form action="<?php echo $action; ?>" method="post" name="userform" onsubmit="return cekData();">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Helpdesk</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<fieldset>
										<legend class="text-semibold">
											<i class="icon-file-text2 position-left"></i>
											Form Tambah User
											<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse in" id="demo1">
											<div class="form-group">
												<label>Nama Lengkap:</label>
		                                        <input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>" placeholder="masukan nama lengkap">
		                                        <?php echo form_error('fullname'); ?>
											</div>

											<div class="form-group">
												<label>Email:</label>
												<input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="masukan email">
												<?php echo form_error('email'); ?>
											</div>

											<div class="form-group">
												<label>Telepon:</label>
												<input type="text" name="Telp" class="form-control" value="<?php echo $Telp; ?>" placeholder="masukan telepon">
												<?php echo form_error('Telp'); ?>
											</div>

											<div class="form-group">
												<label>Username:</label>
												<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="masukan username">
												<?php echo form_error('username'); ?>
											</div>

											<div class="form-group">
												<label>Password:</label>
												<input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="masukan password">
												<?php echo form_error('password'); ?>
											</div>

											<div class="form-group">
												<label>Level:</label>
			                                    <select name="level" value="<?php echo $level; ?>" class="form-control" data-placeholder="pilih level user" class="select">
			                                        <option value="user">user</option> 
			                                        <option value="manager">manager</option> 
			                                        <option value="admin">admin</option> 
			                                    </select>
			                                    <?php echo form_error('level'); ?>
				                			</div>

				                			<div class="form-group">
												<label class="display-block">Akses User:</label>
												<label class="radio-inline">
												<input type="radio" name="status" value="aktif" class="styled" checked="checked">
												Aktif
												</label>
												<label class="radio-inline">
												<input type="radio" name="status" value="blokir" class="styled">
												Blokir
												</label>
				                			</div>
										</div>
									</fieldset>

									<div class="text-right">
										<input type="submit" class="btn btn-primary" value="OK">
										<a href="#" class="btn btn-default">Cancel</a>
									</div>
								</div>
							</div>
						</form>
						<!-- /a legend -->
					</div>


	<script type="text/javascript">
	 function cekData(){
	    if (userform.fullname.value == ""){ 
			   new PNotify({
			        title: "PERHATIAN !",
			        text: "MOHON ISI NAMA LENGKAP !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			            userform.fullname.focus();
			            return false;
			     }

	    if (userform.email.value == ""){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "MOHON MASUKAN EMAIL !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.email.focus();
            return false;
		}

		var filter = new RegExp("^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@" +"[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$");
		if (!filter.test(userform.email.value)){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "EMAIL YANG  ANDA MASUKAN TIDAK VALID !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.email.focus();
			return false;
		}

		if (userform.telp.value == ""){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "MOHON MASUKAN NOMOR TELEPON !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.telp.focus();
			return false;
		}
		
		if(/\D/.test(userform.telp.value)){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "NOMOR TELEPON HARUS DI ISI DENGAN ANGKA !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.telp.focus();
			return false;
        }
		
		if (userform.username.value == ""){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "MOHON ISI USERNAME !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.username.focus();
			return false;
		}  
		
		if (userform.password.value == "" || (userform.password.value).length < 3){
			new PNotify({
			        title: "PERHATIAN !",
			        text: "PASSWORD HARUS DI ISI LEBIH DARI 3 KARAKTER !",
			        width: "100%",
			        cornerclass: "no-border-radius",
			        addclass: "stack-custom-top bg-danger",
			       });
			userform.password.focus();
			return false;
		}else{
			return true;   
		}
	}
    </script>