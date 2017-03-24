
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
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
                                                        <li><a href="<?= site_url('patient/patient_notes') ?>" <?php if (isset($link_status) && $sub_token=='notes'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-keyboard"></i>Type Notes</a></li>
                                                        <li><a href="<?= site_url('patient/patient_notes') ?>" <?php if (isset($link_status) && $sub_token=='notes'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-pencil"></i>Handwritten Notes</a></li>
                                                    </ul>
                                                </li>
                                            <li><a href="<?= site_url('patient/patient_payment') ?>" <?php if (isset($link_status) && $sub_token=='payments'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Payments</a></li>
                                        </ul>
                                     </div>
                                  </div>

                                  <input type="hidden" id="file_no" value="<?= $file_no; ?>">   
                                  <h4>Patient details of: <?=  $file_no ?></h4>  
                                  <div class="col-md-4">
                                    <div class="sticky-note">
                                    <i class="pin"></i>

                                        <div class="panel-heading">
                                         <strong>Patient Vitals</strong>
                                        </div>
                                        <div class="panel-body">
                                        <table class="table table-bordered">
                                        <thead>
                                        	<tr>
                                        		<th>Blood pressure</th>
                                        		<th>Blood oxygen saturation</th>
                                        		<th>Pulse</th>
                                        		<th>Weight (kg)</th>
                                        		<th>BS</th>
                                        		<th>Date</th>
                                        	</tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($vitals as $vital): ?>
                                            	<tr>
                                            		<td><?= $vital->bp ?></td>
                                            		<td><?= $vital->oxygen ?></td>
                                            		<td><?= $vital->pulse ?></td>
                                            		<td><?= $vital->weight ?></td>
                                            		<td><?= $vital->bs ?></td>
                                            		<td><?= $vital->date ?></td>
                                            	</tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        </table>    
                                         </div>
                                </div>
                             </div>
              
                               
                              <div class="col-md-4">
                                    <div class="sticky-note">
                                        <i class="pin"></i>

                                        <div class="panel-heading">
                                        <strong>Patient Medical Summary</strong>
                                        </div>
                                        <div class="panel-body">
                                            <?php foreach ($summary as $summary): ?>
                                            	<h4>Allergies</h4>
                                            	 <hr>
                                            	 <li><?= $summary->allergies; ?></li>
                                            	 <hr>
                                            	 <h4>Medical History</h4>
                                            	  <li><?= $summary->med_history; ?></li>
                                            	   <hr>
                                            <?php endforeach ?>
                                         </div>
                                </div>
                             </div>
                           
                             </div>
                           
                         <div class="row">
                               <div class="col-md-3">
                               </div>
                                    <div class="col-md-8">
                            
                                 <div class="content-box">
                                        <div class="panel-heading">
                                         <div class="alert alert-info">patient visits (including scheduled Appointments)</div>
                                        </div>
                                        <div class="panel-body">
                                        <div id="visits"></div>
                                        </div>
                                </div>
                                </div>
                    </section>
	        

