<section >
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
    <div class="col-md-9">
        <div class="content-box-large">
            <div class="panel-heading">
                <h3>Waiting Patients list</h3>
                <table id="resultTable" class="table table-bordered " >
					
	                                    <thead class="text-primary">
	                                        <th>No</th>
	                                    	<th>File No</th>
	                                    	<th>Patient Name</th>
	                                    	<th>Age</th>
	                                    	<th>address</th>
											<th>Status</th>
	                                    </thead>
	                                    <tbody>
	                                     <?php $no=1 ?>
	                                        <?php foreach ($patient as $patient): ?>
	                                        	<?php if ($patient->status === "waiting"): ?>
	                                        		<tr>
	                                	      <td><?= $no; ?></td>
	                                        	<td><?php echo anchor("patient/view/".$patient->pid, $patient->pid ) ;?></td>
	                                        	<td><?php echo anchor("patient/view/".$patient->pid, $patient->name ) ;?></td>
	                                        	<td><?= $patient->age; ?></td>
	                                        	<td><?= $patient->address; ?></td>
	                                        	<td><?= $patient->status; ?></td>							
	                                        </tr>
	                                        	<?php endif ?>
	                                       <?php $no=$no+1; ?>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>

		                    </table>                   
            	</div>
           </div>
</section>