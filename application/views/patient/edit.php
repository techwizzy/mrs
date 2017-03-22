  <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                            <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-pencil"></i> edit Patient profile</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Start a visit</a></li>
                                            <li class="current"><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-calendar"></i> schedule appointment</a></li>
                                            <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-book"></i> Patient notes</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Paymments</a></li>
                                        </ul>
                                     </div>
                                  </div>

                                  <input type="hidden" id="file_no" value="<?= $file_no; ?>">   
                               
                                  <div class="col-md-8">
                                    <div class="content-box">
                                        <div class="panel-heading">
                                        
                                        </div>
                                        <div class="panel-body"> 
                                              <div class="stepwizard col-md-offset-3">
                                                  <div class="stepwizard-row setup-panel">
                                                    <div class="stepwizard-step">
                                                      <a href="#step-1" type="button" class="btn btn-warning btn-circle">1</a>
                                                      <p>Step 1</p>
                                                    </div>
                                                    <div class="stepwizard-step">
                                                      <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                                      <p>Step 2</p>
                                                    </div>
                                                    <div class="stepwizard-step">
                                                      <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                                      <p>Step 3</p>
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                                <form role="form" action="" method="post">
                                                  <div class="row setup-content" id="step-1">
                                                    <div class="col-xs-6 col-md-offset-3">
                                                      <div class="col-md-12">
                                                        <h4><strong>Step 1: Basic details</strong></h4>
                                                         <div class="form-group">
                                                          <label class="control-label">Previous File No</label>
                                                          <input  maxlength="100" type="text" required="required" name="prev_file_no" class="form-control" placeholder="Previous file No"  />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">First Name</label>
                                                          <input  maxlength="100" type="text" required="required" name="firstname" class="form-control" placeholder="Enter First Name"  />
                                                        </div>
                                                          <div class="form-group">
                                                          <label class="control-label">Surname</label>
                                                          <input  maxlength="100" type="text" required="required" name="surname" class="form-control" placeholder="Enter surname"  />
                                                        </div>
                                                      
                                                        <div class="form-group">
                                                          <label class="control-label">Last Name</label>
                                                          <input maxlength="100" type="text" required="required" name="lastname" class="form-control" placeholder="Enter Last Name" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Age</label>
                                                          <input maxlength="100" type="text" required="required" name="age" class="form-control"  placeholder="age in years" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label">Gender</label>
                                                                <div class="col-md-10">
                                                                     <label class="radio radio-inline">
                                                                          <input type="radio" name="gender">Male </label>
                                                                     <label class="radio radio-inline">
                                                                          <input type="radio" name="gender">Female </label>
                                                                </div>
                                                          </div>

                          
                                                        <button class="btn btn-warning nextBtn  pull-right" type="button" >Next</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row setup-content" id="step-2">
                                                    <div class="col-xs-6 col-md-offset-3">
                                                      <div class="col-md-12">
                                                        <h3> Step 2: Additional Details</h3>
                                                      <div class="form-group">
                                                         <label class="col-xs-3 control-label">Client type</label>
                                                            <div class="col-xs-3">
                                                              <label class="radio radio-inline"><input type ="radio"  id="corporate" onclick="javascript:yesnoCheck();" name="type" value="corporate">corporate
                                                              </label>
                                                              </div>
                                                              <div class="col-xs-6">
                                                                  <label class="radio radio-inline"><input type ="radio"  id="self" onclick="javascript:yesnoCheck();" name="type" value="self bill">Self bill</label>
                                                                 
                                                                 <div id="ifYes" style="display:none">
                                                                   <select name="cname" class="form-control">
                                                              
                                                                   <option value=""></option>
                                                             
                                                                 </select>                                                
                                                              </div>
                                                                </div>
                                                             </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Corporate Name</label>
                                                          <input maxlength="200" type="text" name="corporate" class="form-control" placeholder="Enter Company Name" />
                                                        </div>
                                                         <div class="form-group">
                                                          <label class="control-label">phone number</label>
                                                          <input maxlength="200" type="text" name="corporate" class="form-control" placeholder="Enter Company Name" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label"> Address</label>
                                                          <textarea class="form-control" name="address"></textarea>
                                                        </div>
                                                        <button class="btn btn-warning nextBtn  pull-right" type="button" >Next</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row setup-content" id="step-3">
                                                    <div class="col-xs-6 col-md-offset-3">
                                                      <div class="col-md-12">
                                                        <h3> Step 3: Patient history</h3>
                                                         <div class="form-group">
                                                          <label class="control-label">Medical History</label>
                                                          <textarea class="form-control" name="med_history"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Allergies</label>
                                                          <textarea class="form-control" name="address"></textarea>
                                                        </div>
                                                        <button class="btn btn-success  pull-right" type="submit">Add patient</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </form>
                                       </div>
                                     </div>
                                 </div>
                               </div>
                          </section>         