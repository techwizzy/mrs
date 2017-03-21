
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-user"></i> Dashboard</a></li>
                                            <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-search"></i> Find Patient</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i> Register patient</a></li>
                            
                                        </ul>
                                     </div>
                                  </div>
                                <div class="col-md-4">
                                    <div class="content-box-large">
                                        <div class="panel-heading">
                                         <div class="alert alert-info">Patient Medical Summary</div>
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
                             <div class="col-md-4">
                                    <div class="content-box">
                                        <div class="panel-heading">
                                         <div class="alert alert-info">Patient Vitals</div>
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
               <div class="row">
                              <div class="col-md-4">
                              <div class="content-box-large">
                                        <div class="panel-heading">
                                         <div class="alert alert-info">patient visits (including scheduled Appointments)</div>
                                        </div>
                                        <div class="panel-body">
                                        </div>
                                </div>
                                </div>
                             </div>
                </div>
                    </section>
	        

