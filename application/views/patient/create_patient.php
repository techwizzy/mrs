
                           <section >

                                            <div class="col-md-3">
                                               <div class="sidebar content-box" style="display: block;">
                                                         <ul class="nav">
                                                      <!-- Main menu -->
                                                      <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-user"></i> Dashboard</a></li>
                                                      <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-search"></i> Find Patient</a></li>
                                                      <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i> Register patient</a></li>
                                      
                                                  </ul>
                                               </div>
                                            </div>
                                              <div class="col-md-9">
                                              <div class="content-box-large">
                                                  <div class="panel-heading">
                                                  <h4 class="title">Patient</h4>
                                                 
                                                                <div class="box-tools pull-right" style="margin-right:50px;">
                                                    <div class="btn-group">
                                                      
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Patient options
                                                      <span class="caret"></span>
                                                     </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                     
                                                    </ul>
                                                  </div>

                                                 </div>
                                                  </div>
                                                  <div class="panel-body">
                                                   <form action="<?= site_url('patient/create_patient'); ?>" id="sky-form" class="sky-form" method="POST" enctype="multipart/form-data" style="border-color:#2a7979">
                                           

                                                <div class="row">
                                                    <!--div class="col-md-5">
                                  <div class="form-group label-floating">
                                    <label class="control-label">Company (disabled)</label>
                                    <input type="text" class="form-control" disabled>
                                  </div>
                                                    </div-->
                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">File No</label>
                                    <input class="form-control" name="file_no"  type="text" value="<?php echo set_value('file_no'); ?>" />
                                  </div>
                                  </div>


                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Previous File No</label>
                                    <input class="form-control" name="prev_file_no"  type="text" value="<?php echo set_value('prev_file_no'); ?>" />
                                  </div>
                                  </div>


                                   <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">First Name</label>
                                    <input class="form-control" name="first_name"  type="text" value="<?php echo set_value('first_name'); ?>" />
                                  </div>
                                  </div>


                                   <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Middle Name</label>
                                    <input class="form-control" name="middle_name"  type="text" value="<?php echo set_value('middle_name'); ?>" />
                                  </div>
                                  </div>

                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Surname</label>
                                    <input class="form-control" name="surname"  type="text" value="<?php echo set_value('surname'); ?>" />
                                  </div>
                                  </div>

                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Age</label>
                                    <input class="form-control" name="dob"  type="text" value="<?php echo set_value('dob'); ?>" />
                                  </div>
                                  </div>

                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Phone No</label>
                                    <input class="form-control" name="phone"  type="text" value="<?php echo set_value('phone'); ?>" />
                                  </div>
                                  </div>

                                  
                                  <div class="col-md-4">

                                  <div class="form-group label-floating">
                                  <label>Sex</label>
                                  <select name="designation" class="form-control">
                                  <option>Male</option>
                                  <option>Female</option>
                                  </select>
                                  <input class="form-control" name="sex"  type="text" value="<?php echo set_value('sex'); ?>" />
                                  </div>
                                  </div>

                                  <div class="col-md-10"> </div><br>
                                  
                                 
                                  
                                 
                                  <div class="col-md-5">
                                  <div class="form-group label-floating" style="border-color:#223223">
                                    <label class="control-label">Next of Kin</label>
                                    <input class="form-control" name="nok"  type="text" value="<?php echo set_value('nok'); ?>" />
                                  </div>
                                  </div>


                                  <div class="col-md-4">
                                  <div class="form-group label-floating">
                                  <label>Client Type</label>
                                  <select name="designation" class="form-control">
                                  <option>Self Bill</option>
                                  <option>Corporate</option>
                                  </select>
                                  <input class="form-control" name="client_type"  type="text" value="<?php echo set_value('client_type'); ?>" />
                                  </div>
                                  </div>

                                  <div class="col-md-4">
                                  <div class="form-group label-floating">
                                  <label>Corporate Name</label>
                                  <select name="designation" class="form-control">
                                  <option>NHIF</option>
                                  <option>JUBILEE</option>
                                  </select>
                                  <input class="form-control" name="corporate"  type="text" value="<?php echo set_value('corporate'); ?>" />
                                  </div>
                                  </div>
     
                                                    

                                   <div class="row">
                                   <div class="col-md-12">
                                   <div class="form-group">
                                   <label>Allergies</label>
                                   <div class="form-group label-floating">
                                    <label class="control-label"> Patient Allergies</label>
                                        
                                    <input class="form-control" name="allergies" type="text" value="<?php echo set_value('allergies'); ?>" />
                                  </div>
                                  </div>
                                  </div>
                                  </div>


                                   <div class="row">
                                   <div class="col-md-12">
                                   <div class="form-group">
                                   <label>Allergies</label>
                                   <div class="form-group label-floating">
                                    <label class="control-label"> Medical History</label>
                                        
                                    <input class="form-control" name="med_history" type="text" value="<?php echo set_value('med_history'); ?>" />
                                  </div>
                                  </div>
                                  </div>
                                  </div>


                                                <button type="submit" class="btn btn-info pull-right">Add Patient</button>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>

                    </section>
          




