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
                                                          <label class="control-label">First Name</label>
                                                          <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Last Name</label>
                                                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Address</label>
                                                          <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
                                                        </div>
                                                        <button class="btn btn-warning nextBtn  pull-right" type="button" >Next</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row setup-content" id="step-2">
                                                    <div class="col-xs-6 col-md-offset-3">
                                                      <div class="col-md-12">
                                                        <h3> Step 2</h3>
                                                        <div class="form-group">
                                                          <label class="control-label">Company Name</label>
                                                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="control-label">Company Address</label>
                                                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                                                        </div>
                                                        <button class="btn btn-warning nextBtn  pull-right" type="button" >Next</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row setup-content" id="step-3">
                                                    <div class="col-xs-6 col-md-offset-3">
                                                      <div class="col-md-12">
                                                        <h3> Step 3</h3>
                                                        <button class="btn btn-success  pull-right" type="submit">Submit</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </form>
                                       </div>
                                     </div>
                                 </div>
                               </div>
                          </section>         