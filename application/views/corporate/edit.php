
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
                                        <h4 class="title">Edit Corporate</h4>
                                    <p class="category">Please Edit Corporate Information Below</p>
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
                                           <?php foreach ($single_corporate as $corporate): ?>
                                           <?php echo validation_errors(); ?>
                                          <?php echo form_open("corporate/edit");?>
                                            <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="form-group label-floating">
                                                            <input type="hidden" id="hide" name="corporate_id" class="form-control" value="<?php echo $corporate->id;?>" >
                                                          </div>
                                                        </div>
                                                </div>
                                              <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="form-group label-floating">
                                                            <label class="control-label">Corporate Name</label>
                                                            <input type="text" name="corporate_name" class="form-control" value="<?php echo $corporate->name;?>" >
                                                          </div>
                                                        </div>
                                                </div>
                                               <div class="row">
                                                 <div class="col-md-12">

                                                <div class="form-group label-floating">
                                                    <label class="control-label">Corporate Description</label>
                                                    <textarea name="corporate_desc" class="form-control"><?php echo $corporate->desc;?></textarea>
                                                </div>
                                                </div>
                                              </div>

                                                 <div class="panel-footer" style="background-color:#fff">

                                                    <div class="form-group label-floating">
                                                    <button type="submit" class="btn btn-warning ">Edit Corporate</button>
                                                    </div>
                                               </div>
                                           </div>
                                          <?php echo form_close();?>
                                        <?php endforeach; ?>

                                        </div>
                                    </div>
                                </div>

                    </section>
          


