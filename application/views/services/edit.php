  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Edit Services</h4>
                                    <p class="category">Please edit Service Information Below</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php foreach ($single_service as $service): ?>
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("services/edit");?>
                          <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label" id="hide">Service Id</label>
                                          <input type="text" id="hide" name="service_id" class="form-control" value="<?php echo $service->service_id;?>" >
                                        </div>
                                      </div>
                              </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label">Service Name</label>
                                          <input type="text" name="service_name" class="form-control" value="<?php echo $service->service_name;?>" >
                                        </div>
                                      </div>
                              </div>
                               <div class="row">
                               <div class="col-md-12">
                              
                                <div class="form-group label-floating">
                                    <select name="service_category" class="form-control">
                                      <option value="">--Select Service Category--</option>
                                      <option value="General"<?php if ($service->service_cat === "General") echo 'selected="selected"'; ?> >General</option>
                                      <option value="Holter" <?php if ($service->service_cat === "Holter") echo 'selected="selected"'; ?>>Holter</option>
                                      <option value="ECG"<?php if ($service->service_cat === "ECG") echo 'selected="selected"'; ?>>ECG</option>
                                    </select>
                                </div>
                                
                              </div>
                              </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Service Cost</label>
                                  <input type="text" name="service_cost" class="form-control" value="<?php echo $service->service_cost;?>" >
                              </div>
                              </div>
                            </div>

                              <p><button type="submit" class="btn btn-info pull-right">Edit Service</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>
                      <?php endforeach; ?>


                      </div>


                     </div>
             </div>
     </div>

</div>
