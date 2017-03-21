


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
                                    <div class="col-md-8">
                                    <div class="content-box-large">

                                        <div class="panel-heading">
                                        <h3>Backup Database</h3>
                                        <div id="loader" align="center" style="display:none">
                                         <img src="<?= base_url() ?>assets/img/ajax-loader.gif" width="300px" /><span style="color:orange" >Loading.....This might take a few minutes</span></div>
                                           <div Class="alert alert-info">The backup file will be generated and downloaded to your desktop with the name backup.zip. Please upload it to google drive or dropbox or any other cloud storage service</h4>

                                           </div>

                              
                                     
                                        <div class="panel-body">
                                           <?php echo form_open("auth/start_backup");?>

								             

											  <p><button type="submit" class="btn btn-warning ">Start Backup </button> </div></p>

											<?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>

                    </section>
          



