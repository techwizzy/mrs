                       <section >
                                  <div class="col-md-3">
                                     <div class="sidebar content-box" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/users') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-user"></i> User Management</a></li>
                                            <li><a href="<?= site_url('corporate/index') ?>" <?php if (isset($link_status) && $sub_token=='corporates'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-folder-open"></i> Insurance Companies</a></li>
                                            <li><a href="<?= site_url('auth/backup') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-upload"></i> Backup</a></li>
                            
                                        </ul>
                                     </div>
                                  </div>
                                    <div class="col-md-9">
                                    <div class="content-box-large">
                                        <div class="panel-heading">
                                                      <div class="box-tools pull-right" style="margin-right:50px;">
                                          <div class="btn-group">
                                            
                                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Corporate options
                                            <span class="caret"></span>
                                           </button>
                                          <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?= site_url('corporate/index'); ?>"><strong>All Corporates</strong></a></li>
                                             <li class="divider"></li>
                                            <li><a href="<?= site_url('corporate/create'); ?>"><strong>Add Corporate</strong></a></li>
                                           
                                          </ul>
                                        </div>

                                       </div>
                                        </div>
                                        <div class="panel-body">
                                           <table  class="table table-bordered " id="example">
									   <thead>
										<tr>
											<th></th>
	                                    	<th>Corporate Name</th>
	                                    	<th>Description</th>
											<th>Action</th>
											
										</tr>
										</thead>
										<tbody>
										 <?php foreach ($corporates as $corporate): ?>
											<tr>
									            <td><?= $corporate->id; ?></td>
	                                        	<td><?= $corporate->name; ?></td>
	                                        	<td><?= $corporate->desc; ?></td>
											   <td>
												<a href="<?= site_url("corporate/show_corporate_id/".$corporate->id); ?>" data-toggle="tooltip"  title="edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
			                                    
												</td>
											</tr>
										<?php endforeach;?>
										</tbody>
			                      </table>
                                        </div>
                                    </div>
                                </div>

                    </section>
	        


