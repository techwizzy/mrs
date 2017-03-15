  <div class="content">
        <div class="container-fluid">
              <div class="row">
                      <div class="col-md-12">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Book An Appointment</h4>
                                    <p class="category">-------------------------------------------</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("appointment/create");?>
                            <div classform_open="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label class="control-label">START</label>
                                          <input type="datetime-local" name="start" class="form-control" >
                                        </div>
                                      </div>
                               <div class="col-md-4">
                              
                                <div class="form-group">
                                          <label class="control-label">END</label>
                                          <input type="datetime-local" name="end" class="form-control" >
                                </div>
                              </div>
                               <div class="col-md-4">

                              <div class="form-group label-floating">
                                  <label class="control-label">DESCRIPTION</label>
                                  <textarea type="text" name="description" class="form-control"> </textarea>
                              </div>
                              </div>
                            </div>
                            <br><br>
                           <p><button type="submit" class="btn btn-info pull-right">Book</button></p>
                         </div>
                        <?php echo form_close();?>
                      </div>
                      <div class="card">
                          <div class="card-header" data-background-color="green">
                                  <h4 class="title">Simple Table</h4>
                                  <p class="category">Here is a subtitle for this table</p>
                              </div>
                        <div class="card-content table-responsive">
                                  <table class="table">
                                      <thead class="text-primary">
                                        <th>DAY</th>
                                        <th>START</th>
                                        <th>END</th>
                                        <th>DESCRIPTION</th>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($single_appointment as $appointment): ?>
                                  
                                          <tr>
                                            <td><?PHP $day=$appointment->start; date("Y-M-d H:i:s" ,strtottime($day));
                                            echo date("D", strtottime($day)); ?></td>
                                            <td><?PHP $day=$appointment->start; echo date("Y-M-d H:i:s" ,strtottime($day));?></td>
                                            <td><?= $appointment->end; ?></td>
                                            <td><?= $appointment->desc; ?></td>
                                          </tr>
                                         <?php endforeach ?>
                                          
                                          
                                      </tbody>
                                  </table>
                                  </div>
                              </div>
                   </div>
             </div>
     </div>

</div>
