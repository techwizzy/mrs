


            <section >
                                  <div class="col-md-2">
                                    
                                  </div>
                                    <div class="col-md-8">
                                    <div class="content-box-large">

                                        <div class="panel-heading">
                                        <h3><?php echo lang('deactivate_heading');?></h3>
                                           <h4><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></h4>

                                           </div>

                              
                                     
                                        <div class="panel-body">
                                           <?php echo form_open("auth/deactivate/".$user->id);?>

											  <p>
											  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
											    <input type="radio" name="confirm" value="yes" checked="checked" />
											    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
											    <input type="radio" name="confirm" value="no" />
											  </p>

											  <?php echo form_hidden($csrf); ?>
											  <?php echo form_hidden(array('id'=>$user->id)); ?>

											  <p><button type="submit" class="btn btn-warning ">Submit</button> </div></p>

											<?php echo form_close();?>
                                        </div>
                                    </div>
                                </div>

                    </section>
          



