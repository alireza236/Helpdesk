<div class="row">
    <div class="col-md-9">
    <style type="text/css">
    .formtable {text-align:left; font-size:12px;color:#000000; background-color:#f0f0f0;padding:2px;}
    .control-label {font-style: initial; font-size: 12.5px;}
    .field_set {background-color:#f0f0f0; text-align:left; padding:2px;}
   </style>                    

    <form name="ticketform" class="form-horizontal" action="<?php echo $action; ?>" method="post" onsubmit="return cekData();">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title"></h5>
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
                                              <h4> <i class="icon-file-text2 position-left">
                                                
                                              </i>No Ticket&nbsp;:<strong><?php echo $ticketnumber; ?></strong></h4>
                                              <input type="hidden" name="ticketnumber" value="" >
                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse in" id="demo1">
                                            
                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2"><b> No ID</b>&nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"><?php echo $no_register; ?></div>
                                               </div>
                                            </div>
                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2"><b>Nama Pelanggan</b> &nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"> <?php echo $namacustomer; ?></div>
                                               </div>
                                            </div>

                                            <div class="form-group formtable">
                                               <label class="control-label col-lg-2"><b>Alamat Pelanggan</b> &nbsp;:</label>
                                              <div class="col-lg-10">
                                               <div class="form-control-static"><?php echo $alamat; ?></div>
                                              </div>
                                           </div>  

                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2"><b>Tanggal Berlangganan</b> &nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static">  <?php echo $tgl_berlangganan; ?>  </div>
                                               </div>
                                            </div>

                                            <div class="form-group formtable">
                                                <label class="control-label col-lg-2"><b>Jenis tarif</b> &nbsp;:</label>
                                               <div class="col-lg-10">
                                                <div class="form-control-static"> <?php echo $jenis_tarif; ?> </div>
                                               </div>
                                            </div>
                                        </div>
                                    </fieldset>
                         

                                    <fieldset>
                                        <legend class="text-semibold">
                                            <i class="icon-reading position-left"></i>
                                            Form Ticket
                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                                        <div class="collapse in" id="demo2">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Tanggal Laporan&nbsp;:</label>
                                              <div class="col-lg-9">
            <input type="text" name="reporteddate" value="<?php echo $reporteddate; ?>" class="form-control pickadate-strings">
            <!-- <?php echo form_error('reporteddate') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Nama Pelapor&nbsp;:</label>
                                                <div class="col-lg-9">
            <input type="text" name="reportedby" value="<?php echo $reportedby; ?>" placeholder="" class="form-control">
            <!-- <?php echo form_error('reportedby') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Urgensi (SLA)&nbsp;:</label>
                                                <div class="col-lg-9">
            <select data-placeholder="pilih customer" name="sla" class="select form-control">
                  <option value="<?php echo $sla; ?>" selected="selected"><?php echo $namasla; ?></option>
                 <?php foreach ($sladata as $slaval): ?>
                    <option value="<?php echo $slaval->slaid; ?>"><?php echo $slaval->namasla;?></option>
                 <?php endforeach ?>
            </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Topik Permasalahan&nbsp;:</label>
                                                <div class="col-lg-9">
            <input type="text" name="problemsummary" value="<?php echo $problemsummary; ?>" placeholder="" class="form-control"><?php echo form_error('problemsummary') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Detail Permasalahan&nbsp;:</label>
                                                <div class="col-lg-9">
           <textarea name="problemdetail" rows="5" cols="5" placeholder="detail permasalahan yang terjadi" class="form-control"><?php echo $problemdetail; ?></textarea>
            <?php echo form_error('problemdetail') ?> 
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Telepon&nbsp;:</label>
                                                <div class="col-lg-9">
           <input type="text" name="telp" value="<?php echo $telp; ?>" placeholder="" class="form-control">
           <!-- <?php echo form_error('telp') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Email&nbsp;:</label>
                                                <div class="col-lg-9">
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="" class="form-control">
            <!-- <?php echo form_error('email') ?> -->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Tujuan Assign&nbsp;:</label>
                                                <div class="col-lg-9">
            <select data-placeholder="" name="idassignee" class="select form-control">
                  <option value="<?php echo $assignee; ?>" selected="selected"><?php echo $userassignee; ?></option>
                 <?php foreach ($listuser as $list): ?>
                    <option value="<?php echo $list->id; ?>"><?php echo $list->fullname;?></option>
                 <?php endforeach ?>
            </select>
                                                </div>
                                            </div>

                                    <div class="form-group">
                                    <label class="col-lg-3 control-label">Status&nbsp;:</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" name="oldticketstatus" value="<?php echo $ticketstatus;?>">
                                        <select name="ticketstatus" data-placeholder="pilih" class="select form-control">
                                        <option value="<?php echo $ticketstatus; ?>" selected="selected"><?php echo $ticketstatus; ?>
                                          
                                        </option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Resolved">Resolved</option>
                                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Resolusi&nbsp;:</label>
                              <div class="col-lg-9">
                                <textarea name="resolution" rows="5" cols="5" placeholder="resolusi permasalahan" class="form-control"><?php echo $resolution; ?> 
                                </textarea><?php echo form_error('resolution') ?> 
                              </div>
                        </div>

                                        </div>
                        <div class="text-right">
                            <input type="hidden"  name="id" value="<?php echo $id; ?>">
                            <!-- <input type="text"  name="pendingby" value="<?php echo $pendingby; ?>">
                            <input type="text"  name="pendingdate" value="<?php echo $pendingdate; ?>"> 
                            <input type="text"  name="resolvedby" value="<?php echo $resolvedby; ?>"> 
                            <input type="text"  name="resolveddate" value="<?php echo $resolveddate; ?>"> 
                            <input type="text"  name="closedby" value="<?php echo $closedby; ?>"> 
                            <input type="text"  name="closeddate" value="<?php echo $closeddate; ?>">
                            <input type="text"  name="documentedby" value="<?php echo $documentedby; ?>">
                            <input type="text"  name="documenteddate" value="<?php echo $documenteddate; ?>"> -->
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="<?php echo site_url('public/tickets') ?>" class="btn btn-default">Cancel</a>
                        </div>
                </form>

                </fieldset>
                <fieldset>
                    <legend class="text-semibold">
                      <i class="icon-file-text2 position-left"></i>
                      Ticket Audit Trail&nbsp;:  
                    </legend>
                </fieldset>
                    <div class="table-responsive">
                          <table class="table table-togglable table-hover">
                            <thead  class="field_set">
                                <tr class="formtable">
                                    <th>Tanggal Update</th>
                                    <th>Di Update Oleh</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($audit_trail)): ?>
                            <?php foreach($audit_trail as $audit): ?>
                            <?php  $change_by = $this->user_model->user_data($audit->changeby);  ?>   
                                <tr class="border-dashed">
                                    <td><?php echo date('d-M-Y H:i:s', $audit->changedate); ?></td>
                                    <td><?php echo $change_by->fullname; ?></td>
                                    <td><?php echo $audit->changes; ?></td>
                                </tr>
                            <?php endforeach ?>
                          <?php endif ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
             
             
  <!--/ Modernizr js -->
 
                <script type="text/javascript">
    
    function cekData(){
        if (ticketform.assignee.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon pilih Assign yang dituju!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.assignee.focus();
            return false;
        }
        
        if (ticketform.problemsummary.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon isi topik permasalahan!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.problemsummary.focus();
            return false;
        }
        if (ticketform.problemdetail.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon isi Detail permasalahan!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.problemdetail.focus();
            return false;
        }
        if (ticketform.reportedby.value == ""){
            new PNotify({
              title: "Perhatian !",
              text: "Mohon isi nama User yang melaporkan masalah!",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.reportedby.focus();
            return false;
        }
        
    var filter = new RegExp("^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@"+"[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$");
        if (!filter.test(ticketform.email.value) && ticketform.email.value != ""){
            new PNotify({
              title: "Perhatian !",
              text: "Masukan Email yang valid !",
              width: "100%",
              cornerclass: "no-border-radius",
              addclass: "stack-custom-top bg-danger",
            });
            ticketform.email.focus();
            return false;
        }
        
        if (ticketform.ticketstatus.value == "Closed"){
            if(ticketform.oldticketstatus.value != "Resolved"){
                new PNotify({
                   title: "Perhatian !",
                   text: "Maaf, Anda harus men-set status ke Resolved sebelum Closed!",
                   width: "100%",
                   cornerclass: "no-border-radius",
                   addclass: "stack-custom-top bg-danger",
                });
                ticketform.ticketstatus.focus();
                return false;
            }
        }else{
            return true;
        }
    }
</script>               
                <script type="text/javascript">
                $(function() {
                     $('.pickadate-strings').pickadate({
                        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        showMonthsShort: true,
                        formatSubmit: 'dd/mm/yyyy',
                    });  
               });
                </script>

