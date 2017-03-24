 
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                                                  <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                            <li><a href="<?= site_url('patient/edit_patient/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-pencil"></i> edit Patient profile</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Start a visit</a></li>
                                            <li class="current"><a href="<?= site_url('appointment/view/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='appointment'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-calendar"></i> schedule appointment</a></li>
                                            <li><a href="<?= site_url('patient/note/'.$file_no) ?>" <?php if (isset($link_status) && $sub_token=='notes'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-book"></i> Patient notes</a></li>
                                            <li><a href="<?= site_url('patient/patient_payment') ?>" <?php if (isset($link_status) && $sub_token=='payments'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Payments</a></li>
                                        </ul>
                                     </div>
                                  </div>


                                    
                                   
                                  <div class="col-md-4">
                                    <div class="content-box">
                                    

                                        <div class="panel-heading">
                                         <strong>Book Appointment</strong>
                                        </div>
                                        <div class="panel-body">
                                         <?php echo form_open('appointment/create');?>
                                             <input type="hidden" id="file_no" name="file_no" value="<?= $file_no; ?>"> 
                                                      <div class="form-group">
                                                           <label class="control-label">START</label>
                                                            <input type="datetime-local" name="start" class="form-control" >
                                                     </div>
                                                
                                
                                                  <div class="form-group">
                                                   <label class="control-label">END</label>
                                                        <input type="datetime-local" name="end" class="form-control" >
                                                 </div>
                                              

                                            <div class="form-group label-floating">
                                               <label class="control-label">DESCRIPTION</label>
                                                   <textarea type="text" name="description" class="form-control"> </textarea>
                                            </div>
                                      
                                     </div>
                                     <br><br>
                                     <p> <button type="submit" class="btn btn-warning ">Book</button></p>
                                    </div>
                                      <?php echo form_close();?>
                                   </div>
                                               
                                
              
                               
                              <div class="col-md-4">
                                    <div class="content-box">
                                       

                                        <div class="panel-heading">
                                        <strong>Patient Appointments List</strong>
                                        </div>
                                        <div class="panel-body" style="background-color:#fff">
                                            <table class="table table-bordered ">
                                              <thead class="text-primary">
                                              
                                                <th>START date</th>
                                                <th>END date</th>
                                                <th>DESCRIPTION</th>
                                            </thead>
                                           <tbody>
                                          <?php foreach ($schedule as $appointment): ?>
                                             
                                          <?php $day=$appointment->start; ?>
                                          <?php if ($day<(date('Y-m-d H:m:s A'))): ?>
                                          <tr style="text-decoration: line-through;">
                                           
                                            <td><?php $day=$appointment->start; echo date("Y-M-d H:i:s  A" ,strtotime($day));?></td>
                                           
                                            <td><?= $appointment->end; ?></td>
                                            <td><?= $appointment->desc; ?></td>
                                            </tr>
                                            <?php else: ?>
                                           <tr>
                                           
                                           
                                           
                                            <td><?php $day=$appointment->start; echo date("Y-M-d H:i:s  A" ,strtotime($day));?></td>
                                         
                                            <td><?= $appointment->end; ?></td>
                                            <td><?= $appointment->desc; ?></td>
                                            </tr>
                                            <?php endif ?> 
                                         <?php endforeach ?>
                                          
                                          
                                      </tbody>
                                  </table>
                                         </div>
                                </div>
                             </div>
                           
                             </div>
                           
                    </section>
          




  