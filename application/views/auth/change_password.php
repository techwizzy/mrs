  <section >
                                  <div class="col-md-2">
                                    
                                  </div>
                                    <div class="col-md-8">
                                    <div class="content-box-large">

                                        <div class="panel-heading">
                                        
                                          <h3><?php echo lang('change_password_heading');?></h3>

                                          <div id="infoMessage"><?php echo $message;?></div>

                                           </div>

                              
                                     
                                        <div class="panel-body">


                                                <?php echo form_open("auth/change_password");?>

                                                      <p>
                                                            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                                            <?php echo form_input($old_password);?>
                                                      </p>

                                                      <p>
                                                            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                                                            <?php echo form_input($new_password);?>
                                                      </p>

                                                      <p>
                                                            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                                            <?php echo form_input($new_password_confirm);?>
                                                      </p>

                                                      <?php echo form_input($user_id);?>
                                                      <p><button type="submit" class="btn btn-warning ">Change</button>
                              </div></p>

                                                <?php echo form_close();?>
                                      </div>
                                    </div>
                                    </div>
                                    </section>