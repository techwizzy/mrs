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
									                
									                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">user options
									                    <span class="caret"></span>
									                   </button>
									                  <ul class="dropdown-menu" role="menu">
									                    <li><a href=""></i>All users</a></li>
									                     <li class="divider"></li>
									                    <li><a href="<?= site_url('auth/create_user'); ?>">Create user</a></li>
									                   
									                  </ul>
									                </div>

									            </div>
                                        </div>
                                        <div class="panel-body">
                                           <table  class="table table-bordered " id="example">
									   <thead>
										<tr>
											<th>Full name</th>
											<th>Phone</th>
											<th>Username</th>
											<th>Last login</th>
											
											<th><?php echo lang('index_action_th');?></th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($users as $user):?>
											<tr>
									            <td><?php echo htmlspecialchars($user->fullname,ENT_QUOTES,'UTF-8');?></td>
									          
									            <td><?= htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8');?></td>
									            <td><?= $user->username ?></td>
												
										        <td><?= date('d-m-Y H:i:s A',($user->last_login)); ?></td>
											   <td>
												<a href="<?= site_url("auth/edit_user/".$user->id); ?>" data-toggle="tooltip"  title="edit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
			                                    <?php if ($user->active): ?><a href="<?= site_url("auth/deactivate/".$user->id); ?>" data-toggle="tooltip"  title="deactivate" class="btn btn-danger btn-xs"><i class="fa fa-lock"></i></a> <?php else: ?> <a href="<?= site_url("auth/activate/".$user->id); ?>" data-toggle="tooltip"  title="activate" class="btn btn-success btn-xs"><i class="fa fa-unlock"></i></a> <?php endif; ?>
			                                    <a href="<?= site_url("auth/change_password/".$user->id); ?>" data-toggle="tooltip"  title="change password" class="btn btn-warning btn-xs"><i class="fa fa-refresh"></i></a>
												</td>
											</tr>
										<?php endforeach;?>
										</tbody>
			                      </table>
                                        </div>
                                    </div>
                                </div>

                    </section>
	        