  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Add Services</h4>
                                    <p class="category">Please Enter Service Information Below</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("services/create");?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label">Service Name</label>
                                          <input type="text" name="service_name" class="form-control" >
                                        </div>
                                      </div>
                              </div>
                               <div class="row">
                               <div class="col-md-12">
                              
                                <div class="form-group label-floating">
                                    <select name="service_category" class="form-control">
                                      <option value="">--Select Service Category--</option>
                                      <option value="General">General</option>
                                      <option value="Holter">Holter</option>
                                      <option value="ECG">ECG</option>
                                    </select>
                                </div>
                                
                              </div>
                              </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Service Cost</label>
                                  <input type="text" name="service_cost" class="form-control" >
                              </div>
                              </div>
                            </div>

                              <p><button type="submit" class="btn btn-info pull-right">Create Service</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>


                      </div>


                     </div>
             </div>
     </div>

</div>
