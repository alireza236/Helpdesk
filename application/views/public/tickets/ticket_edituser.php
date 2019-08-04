<style type="text/css">
    .formtable {text-align:left; font-size:12px;color:#000000; background-color:#f0f0f0;padding:2px;}
    .control-label {font-style: initial; font-size: 12.5px;}
    .field_set {background-color:#f0f0f0; text-align:left; padding:2px;}
</style>
<div class="row">
    <div class="col-md-9">

        <form class="form-horizontal" name="ticketform" action="<?php echo $action; ?>" method="post" onsubmit="return cekData();">
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
                                            <i class="icon-file-text2 position-left"></i>
                                            No. Ticket&nbsp;: <strong> <?php echo $ticketnumber; ?></strong>
                                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                                <i class="icon-circle-down2"></i>
                                            </a>
                                        </legend>

                            <div class="collapse in" id="demo1">
                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nama pelanggan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo strtoupper($namacustomer); ?></div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">ID Pelanggan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"> <strong><?php echo $no_register; ?></strong></div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Tanggal menjadi Pelanggan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $tgl_berlangganan; ?></div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Jenis/Golongan Tarif&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $jenis_tarif; ?></div>
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Tanggal dilaporkan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $reporteddate; ?></div>
                                     <input type="hidden" size='20' name='reporteddate' value="<?php echo $reporteddate; ?>">   
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nama Pelapor&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $reportedby ?></div>
                                     <input type="hidden" size='20' name='reportedby' value="<?php echo $reportedby; ?>">   
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Urgensi(SLA)&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $sla ?></div>
                                     <input type="hidden" size='20' name='sla' value="<?php echo $slaid; ?>"> 
          <!--   
           <select data-placeholder="" class="form-control" name="sla" value="<?php echo $sla; ?>" class="select">
           <?php $slas = $this->sla_model->get_sla()  ?>
           <option></option>
                <?php foreach ($slas as $slaval): ?>
                   <option value="<?php echo $slaval->slaid; ?>"><?php echo $slaval->namasla;?></option>
                <?php endforeach ?>
           </select>  --> 

                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Permasalahan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $problemsummary; ?></div>
                                     <input type="hidden" size='20' name='problemsummary' value="<?php echo $problemsummary; ?>">   
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Detail Permasalahan&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo nl2br($problemdetail); ?></div>
                                         <input type="hidden" size='20' name='problemdetail' value="<?php echo $problemdetail; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Email&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $email ?></div>
                                     <input type="hidden" size='20' name='telp' value="<?php echo $email; ?>">   
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Nomor telepon&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $telp ?></div>
                                     <input type="hidden" size='20' name='telp' value="<?php echo $telp; ?>">   
                                    </div>
                                </div>

                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Assign To&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static"><?php echo $userassignee_fullname; ?></div>
                                     <input type="hidden" size='20' name='idassignee' value="<?php echo $assignee; ?>">   

                                    </div> 
                                    <div class="col-lg-10">
                                        <!-- <div class="form-control-static">
                                            <select name="" id="" class="form-control">
                                                                           <option value="<?php $assignee; ?>" selected='selected'><?php echo $userassignee_fullname; ?></option>  
                                                <?php foreach ($alluser as $user): ?>
                                                     
                                                <option value="<?php $user->id; ?>"><?php echo $user->fullname; ?></option>   
                                                  
                                                <?php endforeach ?>
                                            </select>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Status&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">
                                             <input type="hidden" name="oldticketstatus" value="<?php echo $ticketstatus; ?>"> 
                                            <select name="ticketstatus" id="" class="form-control">
                              <?php echo '<option value=' . $ticketstatus. ' selected="selected">'.  $ticketstatus . '</option>';?>
                                            <option value="Assigned"> Assigne </option>
                                            <option value="Resolved"> Resolved </option>
                                            <option value="Pending"> Pending </option>
                                            <option value="Closed"> Closed </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group formtable">
                                    <label class="control-label col-lg-2">Resolution&nbsp;:</label>
                                    <div class="col-lg-10">
                                        <div class="form-control-static">
                                     <textarea name="resolution" class="form-control" id="" cols="30" rows="5"><?php echo $resolution; ?></textarea>
                                     <?php echo form_error('resolution') ?>

                                        </div>
                                    </div>
                                <div>
                                     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                                     <!-- <input type="hidden" name="pendingby" value="<?php echo $pendingby; ?>"> 
                                     <input type="hidden" name="pendingdate" value="<?php echo $pendingdate; ?>"> 
                                     <input type="hidden" name="resolvedby" value="<?php echo $resolvedby; ?>"> 
                                     <input type="hidden" name="resolveddate" value="<?php echo $resolveddate; ?>"> 
                                     <input type="hidden" name="closedby" value="<?php echo $closedby; ?>"> 
                                     <input type="hidden" name="closeddate" value="<?php echo $closeddate; ?>">  -->
                                </div>
                                </div>
                        </div>
                    
                    </fieldset>
                      <div class="text-right">
                       <div class="form-group">
                                    <div class="col-lg-12">
                                         <input type="submit" class="btn btn-primary" value="Submit">
                                          <a href="<?php echo site_url('public/tickets') ?>" class="btn btn-default">Cancel</a>
                                    </div>
                        </div>
                      </div>
                </form>
            <fieldset>
                    <legend class="text-semibold">
                            <i class="icon-reading position-left"></i>
                            Ticket Audit Trail
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
                                <?php foreach ($audit_trail as $audit ): ?>
                                    <?php $change_by = $this->user_model->user_data($audit->changeby); ?>
                                <tr class="border-dashed">
                                    <td><?php echo date('d-M-Y H:i:s', $audit->changedate); ?></td>
                                    <td><?php echo $change_by->fullname; ?></td>
                                    <td><?php echo $audit->changes; ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>   

                                          
                </div>
                </div>
                 
                <script type="text/javascript">

                   function cekData(){
                     if (ticketform.resolution.value == ""){   
                            new PNotify({
                                  title: "Perhatian !",
                                  text: "Mohon isi field Resolusi!",
                                  width: "100%",
                                  cornerclass: "no-border-radius",
                                  addclass: "stack-custom-top bg-danger",
                                });
                                ticketform.resolution.focus();
                                return false;
                            }
                            if (ticketform.ticketstatus.value == "Closed")
                            {   if(ticketform.oldticketstatus.value != "Resolved")
                                { 
                                  //alert("You must set status to resolved before closed!");
                                new PNotify({
                                  title: "Perhatian !",
                                  text: "Anda harus set Ticket ke Resolved sebelum di Closed !",
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


