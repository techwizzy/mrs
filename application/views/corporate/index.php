
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Corporate</h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
								<div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>id</th>
	                                    	<th>Corporate Name</th>
	                                    	<th>Description</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach ($corporates as $corporate): ?>
	                                
	                                	      <tr>
	                                        	<td><?= $corporate->id; ?></td>
	                                        	<td><?= $corporate->name; ?></td>
	                                        	<td><?= $corporate->desc; ?></td>
												<td class="btn btn-info"><?php echo anchor("corporate/show_corporate_id/".$corporate->id, 'Edit') ;?></td>
	                                        </tr>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>




