
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('patient/view/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                            <li><a href="<?= site_url('patient/edit_patient/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-pencil"></i> edit Patient profile</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Start a visit</a></li>
                                            <li class="current"><a href="<?= site_url('appointment/view/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='appointment'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-calendar"></i> schedule appointment</a></li>
                                      
                                              <li class="submenu">
                                                    <a href="#">
                                                    <i class="glyphicon glyphicon-book"></i> Patient notes
                                                    <span class="caret pull-right"></span>
                                                     </a>
                                                     <!-- Sub menu -->
                                                     <ul>
                                                        <li><a href="<?= site_url('patient/note/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='notes'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-keyboard"></i>Type Notes</a></li>
                                                        <li><a href="<?= site_url('patient/patient_notes') ?>" <?php if (isset($link_status) && $sub_token=='notes'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-pencil"></i>Handwritten Notes</a></li>
                                                    </ul>
                                                </li>
                                            <li><a href="<?= site_url('patient/patient_payment') ?>" <?php if (isset($link_status) && $sub_token=='payments'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Payments</a></li>
                                        </ul>
                                     </div>
                                  </div>
                                   
                                  <div class="col-md-4">
                                    <div class="content-box">
                                    

                                        <div class="panel-heading">
                                         <div class="alert alert-warning"> <strong>New Note</strong></div>
                                        </div>
                                        <div class="panel-body">
                                         <?php echo form_open('patient/create_note');?>
                                             <input type="hidden" id="file_no" name="file_no" value="<?= $file_no; ?>"> 
                                                      <div class="form-group">
                                                           <label class="control-label">Date of Note</label>
                                                           <input type="text" class="bfh-datepicker form-control" name="date_of_note"  />
                                                     </div>
                                                
                                

                                            <div class="form-group label-floating">
                                               <label class="control-label">Patient Note</label>
                                                   <textarea name="notes" class="form-control"  required="required" rows="5" id="ckeditor_standard"> </textarea>
                                            </div>
                                      
                                     </div>
                                     <br><br>
                                     <p> <button type="submit" class="btn btn-warning ">Add note</button></p>
                                    </div>
                                      <?php echo form_close();?>
                                   </div>
                                               
                                
              
                               
                              <div class="col-md-5">
                                    <div class="content-box">
                                       

                                        <div class="panel-heading">
                                        <strong>Patient Notes</strong>
                                        </div>
                                        <div class="panel-body" style="background-color:#fff">
                                            <table class="table table-bordered ">
                                              <thead>
                                                <tr>
                                                  <th>Date</th>
                                                  <th>Note</th>
                                                </tr>
                                                <tbody>
                                                  <?php foreach ($notes as $note): ?>
                                                    <tr>
                                                    <td><?= $note->date_of_note ?></td>
                                                    <td><?= $note->notes ?></td>
                                                    </tr>
                                                  <?php endforeach ?>
                                                </tbody>
                                              </thead>
                                            </table>
                                         </div>
                                </div>
                             </div>
                           
                             </div>
                           
                    </section>
          




  