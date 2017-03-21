<section >
                                  <div class="col-md-3">
                                      <div class="sidebar content-box" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/users') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-user"></i> User Management</a></li>
                                            <li><a href="<?= site_url('corporate/corporates') ?>" <?php if (isset($link_status) && $sub_token=='corporates'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-folder-open"></i> Insurance Companies</a></li>
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
                                      <li><a href="<?= site_url('auth/users') ?>"></i>All users</a></li>
                                       <li class="divider"></li>
                                      <li><a href="<?= site_url('auth/create_user'); ?>">Create user</a></li>
                                     
                                    </ul>
                                  </div>

                              </div>
                                        </div>
                                        <div class="panel-body">
                            <?php echo form_open(uri_string());?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                         <label> Full name</label>
                                          
                                          <?php echo form_input($fullname);?>
                                           <?=  form_error('fullname'); ?>
                                       </div>
                                      </div>
                              </div>
                               <div class="row">
                               <div class="col-md-12">
                              
                                <div class="form-group label-floating">
                                  <label>Username</label>
                                   <?php
                                        
                                        echo form_input($identity);
                                        echo form_error('identity');
                                    ?>
                               </div>
                                
                              </div>
                              </div>
                              <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                     <label>Designation</label>
                                 <select name="designation" class="form-control">
                                   <option>Doctor</option>
                                   <option>Admin</option>
                                   <option>Secretary</option>
                                   <option>Nurse</option>
                                 </select>
                              </div>
                              </div>
                            </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                    <label>ID Number</label>
                                    <?php echo form_input($id_number);?>
                              </div>
                              </div>
                            </div>
                               <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                    <?php echo lang('create_user_phone_label', 'phone');?> <br />
                                    <?php echo form_input($phone);?>
                              </div>
                              </div>
                            </div>
                          
                           <div class="row">
                              <div class="col-md-12">

                               <div class="form-group label-floating">
                                  <?php echo lang('edit_user_password_label', 'password');?> <br />
                                  <?php echo form_input($password);?>
                             </div>
                            </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">

                               <div class="form-group label-floating">
                                  <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                                  <?php echo form_input($password_confirm);?>
                            </div>
                            </div>
                            </div>

                            <?php if ($this->ion_auth->is_admin()): ?>

                                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                                <?php foreach ($groups as $group):?>
                                    <label class="checkbox">
                                    <?php
                                        $gID=$group['id'];
                                        $checked = null;
                                        $item = null;
                                        foreach($currentGroups as $grp) {
                                            if ($gID == $grp->id) {
                                                $checked= ' checked="checked"';
                                            break;
                                            }
                                        }
                                    ?>
                                    <input type="checkbox" name="groups[]"  class="checkbox" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                    </label>
                                <?php endforeach?>

                            <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

            <div class="panel-footer" style="background-color:#fff">
               <div class="form-group label-floating">
                  <button type="submit" class="btn btn-warning ">Save User </button>
             </div>
             </div>

<?php echo form_close();?>
