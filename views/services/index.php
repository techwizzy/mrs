
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Simple Table</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
	                            <div class="card-content table-responsive">
								<div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>id</th>
	                                    	<th>Service Name</th>
	                                    	<th>Cost</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach ($services as $service): ?>
	                                
	                                	      <tr>
	                                        	<td><?= $service->service_id; ?></td>
	                                        	<td><?= $service->service_name; ?></td>
	                                        	<td><?= $service->service_cost; ?></td>
												<td class="text-primary">$36,738</td>
	                                        </tr>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>




