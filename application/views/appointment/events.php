 
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
                                         <strong>Appointment shedule</strong>
                                        </div>
                                        <div class="panel-body">
                                        <div id='calendar'></div>
                                   </div>
                                               
                                
              
           
                           
                             </div>
                           
                    </section>
          




  