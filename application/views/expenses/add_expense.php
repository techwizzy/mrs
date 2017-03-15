


<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Add Expense</h4>
									<p class="category">Record a New Expense</p>
	                            </div>
	                            <div class="card-content">
	                            <form action="<?= site_url('expenses/add_expense'); ?>" id="sky-form" class="sky-form" method="POST" enctype="multipart/form-data" style="border-color:#2a7979">
	                               

	                                    <div class="row">
	                                        <!--div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Company (disabled)</label>
													<input type="text" class="form-control" disabled>
												</div>
	                                        </div-->
	                                        <div class="col-md-5">
												<div class="form-group label-floating" style="border-color:#223223">
													<label class="control-label">Expense Name</label>
													
													<input class="form-control" name="expense_name" placeholder="Expense Name" type="text" value="<?php echo set_value('expense_name'); ?>" />
												</div>
	                                        </div>
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Expense Amount</label>
													
													<input class="form-control" name="expense_amount" placeholder="Expense Amount" type="text" value="<?php echo set_value('expense_amount'); ?>" />
												</div>
	                                        </div>
	                                    </div>

	                                        

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Expense Note</label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Notes on the Expense</label>
								    					
								    					<input class="form-control" name="expense_note" type="text" value="<?php echo set_value('expense_note'); ?>" />
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-info pull-right">Add Expense</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<!--div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="../assets/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">CEO / Co-Founder</h6>
    								<h4 class="card-title">Alec Thompson</h4>
    								<p class="card-content">
    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
    							</div>
    						</div>
		    			</div-->
	                </div>
	            </div>
	        </div>





