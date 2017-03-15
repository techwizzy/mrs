  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title"><?php echo lang('create_user_heading');?></h4>
                                    <p class="category"><?php echo lang('create_user_subheading');?></p>
                              </div>
                              <div class="card-content">
                        
                           
                         

                        <?php echo form_open("auth/create_user");?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                              
                                          <?php echo lang('create_user_fname_label', 'fullname');?> <br />
                                          <?php echo form_input($fullname);?>
                                           <?=  form_error('identity'); ?>
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
                                    <?php echo lang('create_user_password_label', 'password');?> <br />
                                    <?php echo form_input($password);?>
                              </div>
                              </div>
                              </div>
                                 <div class="row">
                               <div class="col-md-12">
                             <div>
                                    <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                                    <?php echo form_input($password_confirm);?>
                              </div>
                              </div>
                              </div>

                              <p><button type="submit" class="btn btn-info pull-right">Create user</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>


                      </div>


                     </div>
             </div>
     </div>

</div>
