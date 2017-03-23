<section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                           
                                            <li><a href="<?= site_url('services/list') ?>" <?php if (isset($link_status) && $sub_token=='list'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Patient Waiting list</a></li>
                                            <li><a href="<?= site_url('services/register') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Start a visit</a></li>
                                            <li><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-calendar"></i> schedule appointment</a></li>
                                            <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-book"></i> Patient notes</a></li>
                                            <li class="current"><a href="<?= site_url('payment/index') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Payments</a></li>
                                        </ul>
                                     </div>
                                  </div>
                   <div class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Mpesa Payment</h4>
                                    <p class="category">New Payment <i class="fa fa-mobile" aria-hidden="true"></i></p>
                              </div>
                              <div class="card-content">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open("payment/mpesainsert");?>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                  <label class="control-label">Date</label>
                                                  <input type="datetime-local" name="date" class="form-control" value="<?= date('Y-m-d H:i:s')?>" >
                                                </div>
                                              </div>
                                      </div>
                                      <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Patient</label>
                                          <input type="text" name="Patient_anme" class="form-control" value="<?php foreach ($patient as $p) {
                                            echo $p->first_name;
                                          }?>" >
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Total Bill</label>
                                          <input type="text" name="total_bill" class="form-control" value="<?php foreach ($single_bill as $bill) {
                                    echo $bill->total_amount;
                                  }?>" >
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Till Number</label>
                                          <input type="text" name="company_name" class="form-control" >
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Transaction Code</label>
                                          <input type="text" name="transaction_code" class="form-control" >
                                      </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Due Date</label>
                                          <input type="datetime-local" name="due_date" class="form-control" >
                                      </div>
                                      </div>
                                    </div>
                                     <div class="row">
                                       <div class="col-md-12">

                                      <div class="form-group label-floating">
                                          <label class="control-label">Amount paid</label>
                                          <input type="text" name="amount_paid" class="form-control" >
                                      </div>
                                      </div>
                                    </div>

                                      <p><button type="submit" class="btn btn-info pull-right"><i class="fa fa-mobile-phone" aria-hidden="true"></i> Recieve Payment</button>
                                              </p>
                                 </div>
                                <?php echo form_close();?>

                      </div>


                     </div>
             </div>
     </div>

</div>                                            
</section>