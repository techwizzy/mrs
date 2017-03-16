  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Cash Payment</h4>
                                    <p class="category">New Payment <i class="fa fa-money" aria-hidden="true"></i>
 </p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("payment/cash");?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label">Date</label>
                                          <input type="datetime-local" name="date" class="form-control" >
                                        </div>
                                      </div>
                              </div>
                              <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Patient</label>
                                  <input type="text" name="Patient_anme" class="form-control" >
                              </div>
                              </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Total Bill</label>
                                  <input type="text" name="total_bill" class="form-control" >
                              </div>
                              </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Holder</label>
                                  <input type="text" name="holder" class="form-control" >
                              </div>
                              </div>
                            </div>
                            <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Due Date</label>
                                  <input type="datetime-local" name="due date" class="form-control" >
                              </div>
                              </div>
                            </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Amount paid</label>
                                  <input type="text" name="service_cost" class="form-control" >
                              </div>
                              </div>
                            </div>

                              <p><button type="submit" class="btn btn-info pull-right"><i class="fa fa-cc-diners-club" aria-hidden="true"></i>
Recieve Payment</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>


                      </div>


                     </div>
             </div>
     </div>

</div>
