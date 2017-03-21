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
                <h3>All Patients</h3>
                <table id="resultTable" class="table table-bordered " >
					
	                                    <thead class="text-primary">
	                                        <th>No</th>
	                                    	<th>File No</th>
	                                    	<th>Patient Name</th>
	                                    	<th>Sex</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
	                                     <?php $no=1 ?>
	                                        <?php foreach ($patient as $patient): ?>
	                                        	
	                                	      <tr>
	                                	      <td><?= $no; ?></td>
	                                        	<td><?php echo anchor("payment/list1/".$patient->file_no, $patient->file_no ) ;?></td>
	                                        	<td><?php echo anchor("payment/list1/".$patient->file_no, $patient->first_name ) ;?></td>
	                                        	<td><?= $patient->gender; ?></td>
												<td><?php echo anchor("patient/edit_patient/".$patient->file_no, 'Edit') ;?></td>
	                                        </tr>
	                                       <?php $no=$no+1; ?>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>

		                    </table>                   
            	</div>
           </div>
</section>