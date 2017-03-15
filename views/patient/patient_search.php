
	       <div background-color="purple">
	             <form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Patient Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">Search</i><div class="ripple-container"></div>
							</button>
	                    </form>

			</div>





	        <div class="content">
	            <div class="container-fluid">




			


	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Patient Record</h4>
	                                <p class="category">Find a Patient Record</p>
	                            </div>
	                           
	                          



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
	                                        	<td><?= $patient->file_no; ?></td>
	                                        	<td><?= $patient->first_name; ?>
	                                        	<td><?= $patient->gender; ?></td>
												<td><?php echo anchor("patient/edit_patient/".$patient->file_no, 'Edit') ;?></td>
	                                        </tr>
	                                       <?php $no=$no+1; ?>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">All Patient Records</h4>
	                                <p class="category"></p>
	                            </div>




