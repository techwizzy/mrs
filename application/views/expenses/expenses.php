
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Expenses</h4>
	                                <p class="category">A list of all expenses</p>
	                            </div>
	                            <div class="card-content table-responsive">
								<div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>id</th>
	                                    	<th>Expense Name</th>
	                                    	<th>Cost</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
	                                        <?php foreach ($expenses as $expense): ?>
	                                
	                                	      <tr>
	                                        	<td><?= $expense->id; ?></td>
	                                        	<td><?= $expense->expense_name; ?></td>
	                                        	<td><?= $expense->expense_amount; ?></td>
												<td><?php echo anchor("expenses/edit_expense/".$expense->id, 'Edit') ;?></td>
	                                        </tr>
	                                       <?php endforeach ?>
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>




