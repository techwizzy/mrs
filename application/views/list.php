<div class="content">
				<div class="container-fluid">
					<div class="row">
					<?php foreach ($patient as $patient): ?>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">perm_identity</i>
								</div>
								<div class="card-content">
									<p class="category">NAME</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<h4><b><?= $patient->first_name; ?></b></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">assessment</i>
								</div>
								<div class="card-content">
									<p class="category">AGE</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<h4><?= $patient->age; ?></h4>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">map</i>
								</div>
								<div class="card-content">
									<p class="category">Location</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<h4><?= $patient->address; ?></h4>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">contact_phone</i>
								</div>
								<div class="card-content">
									<p class="category">Phone Number</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<h4><?= $patient->phone; ?></h4>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
					<div class="row">
					<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Vital Sign</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-primary">
	                                    	<th>Blood Pressure</th>
	                                    	<th>Oxygen</th>
	                                    	<th>Pulse Rate</th>
	                                    	<th>Weight</th>
											<th>Blood Sugar</th>
											<th>Date</th>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach ($results as $data): ?>
	                                
	                                	      <tr>
	                                        	<td><?= $data->BP; ?></td>
	                                        	<td><?= $data->oxygen; ?></td>
	                                        	<td><?= $data->pulse; ?></td>
	                                        	<td><?= $data->weight; ?></td>
	                                        	<td><?= $data->BS; ?></td>
												<td><?= $data->date; ?></td>
	                                        </tr>
	                                       <?php endforeach ?>

	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>