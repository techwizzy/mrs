
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Patient</h4>
	                                <p class="category">A list of all Patients</p>
	                            </div>
	                            <div class="card-content table-responsive">
								<div class="card-content table-responsive">
	                                <table class="table">
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
	                                        	<td><?php echo anchor("payment/index/".$patient->file_no, $patient->file_no) ;?></td>
	                                        	<td><?= $patient->first_name; ?>
	                                        	<td><?= $patient->gender; ?></td>
												<td><?php echo anchor("patient/edit_patient/".$patient->file_no, 'Edit') ;?></td>
	                                        </tr>
	                                       <?php $no=$no+1; ?>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>




