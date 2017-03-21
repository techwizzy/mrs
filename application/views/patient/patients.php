
                           <section >
                                  <div class="col-md-3">
                                     <div class="sidebar content-box" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-user"></i> Dashboard</a></li>
                                            <li><a href="<?= site_url('patient/patients') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-search"></i> Find Patient</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i> Register patient</a></li>
                            
                                        </ul>
                                     </div>
                                  </div>
                                    <div class="col-md-9">
                                    <div class="content-box-large">
                                        <div class="panel-heading">
                                        <p>Type a name to begin searching</p>
										<form class="form-horizontal" name="search" role="form" method="POST" onkeypress="return event.keyCode != 13;">
											<div class="input-group col-sm-11">
												<input id="name" name="name" type="text" class="form-control" placeholder="Search by name..." autocomplete="off"/>
												<span class="input-group-btn">
													<button type="button" class="btn btn-default btnSearch">
														<span class="glyphicon glyphicon-search"> </span>
													</button> </span>
											</div>
										</form>
                                   
                                        </div>
                                        <div class="panel-body">
                                       <div class="content-panel tablesearch">

							
									<table id="resultTable" class="table table-bordered " >
									   <thead>
										<tr>
											<th>No</th>
	                                    	<th>File No</th>
	                                    	<th>Patient Name</th>
	                                    	<th>Sex</th>
											
										</tr>
										</thead>
										<tbody>
								
	                                    
										</tbody>
			                      </table>
                                        </div>
                                    </div>
                                </div>

                    </section>
	        

