 
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                               
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('appointment/events') ?>" <?php if (isset($link_status) && $sub_token=='appointment'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                           
                                            <li><a href="<?= site_url('appointment/index') ?>" <?php if (isset($link_status) && $sub_token=='schedule'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-calendar"></i> View Schedule</a></li>
                                     
                                        </ul>
                                     </div>
                                  </div>


                                    
                                   
                                  <div class="col-md-8">
                                    <div class="content-box">
                                    

                                        <div class="panel-heading">
                                        
                                          <button class="btn btn-primary btn-sm" onclick="tableToExcel('scheduleTable', 'W3C Example Table')" ><i class="fa fa-download"></i>Export To Excel</button>
                                             <div class="box-tools pull-right" style="margin-right:50px;">
                                                    
                                                      
                                                   <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 3px solid #999; width: 100%">
                                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                                        <span></span> <b class="caret"></b>
                                                    </div>
                                                  </div>

                                                 
                                        </div>
                                        <div class="panel-body" style="background-color: #fff; border:1px solid #ccc">
                                         <strong>Appointment shedule</strong>
                                        <table class="table table-bordered" id="scheduleTable">
                                          <thead>
                                            <th>Start date</th>
                                            <th>End Date</th>
                                            <th>Title</th>
                                          </thead>
                                          <tbody>
                                            <?php foreach ($appointments as $appointment): ?>
                                              <tr>
                                               <td><?= $appointment->start ?></td>
                                               <td><?= $appointment->end ?></td>
                                               <td><?= $appointment->desc ?></td>
                                               </tr>
                                            <?php endforeach ?>
                                          </tbody>
                                        </table>
                                   </div>
                                               
                                
              
           
                           
                             </div>
                           
                    </section>
          




  