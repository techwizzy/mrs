
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
	                                <p class="lead"><br><?= $links ?><br></p>
	                            </div>




