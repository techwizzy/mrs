 
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                               
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('appointment/events') ?>" <?php if (isset($link_status) && $sub_token=='appointment'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Waiting List</a></li>
                                           
                                            <li><a href="<?= site_url('appointment/index') ?>" <?php if (isset($link_status) && $sub_token=='schedule'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-bar-chart"></i> Visit Chart</a></li>
                                     
                                        </ul>
                                     </div>
                                  </div>


                                    
                                   
                                  <div class="col-md-8">
                                    <div class="content-box">
                                    

                                        <div class="panel-heading">
                                        
                                          <button class="btn btn-primary btn-sm" onclick="tableToExcel('visitTable', 'W3C Example Table')" ><i class="fa fa-download"></i>Export To Excel</button>  
                                             <div class="box-tools pull-right" >
                                                    
                                                   
                                                   <div id="visitrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 3px solid #999; width: 100%">
                                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                                        <span></span> <b class="caret"></b>

                                                    </div>
                                                    
                                                  </div>

                                                 
                                        </div>
                                        <div class="panel-body" style="background-color: #fff; border:1px solid #ccc">
                                         <strong>Waiting List</strong>
                                        <table class="table table-bordered" id="visitTable" >
                                          <thead>
                                            <th>Patient Name</th>
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Wdate</th>
                                            <th>Status</th>
                                          </thead>
                                          <tbody>
                                            <?php foreach ($visits as $visit): ?>
                                              <tr>
                                               <td><?= $visit->name ?></td>
                                               <td><?= $visit->age ?></td>
                                               <td><?= $visit->address ?></td>
                                               <td><?= $visit->wdate ?></td>
                                               <td><div class="label label-warning"><?= $visit->status ?></div></td>
                                               </tr>
                                            <?php endforeach ?>
                                          </tbody>
                                        </table>
                                   </div>
                                               
                                
              
           
                           
                             </div>
                           
                    </section>
          




  