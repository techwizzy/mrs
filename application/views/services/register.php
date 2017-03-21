<div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Services</h4>
                                    <p class="category">Please Select Service Below</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("services/register");?>
                        <table class="table">
                        <tbody>
                        <?php foreach ($services as $service): ?>
                          <tr>
                            <td>
                              <div class="checkbox">
                                <label>
                                  <!-- <input hidden="hidden" name="service_id[]" value="<?= $service->service_id?>"> -->
                                  <input type="checkbox" name="service_name[]" value="<?php echo $service->service_name;?>" /> 
                                  <input type="hidden" name="service_cost[]" value="<?php echo $service->service_cost;?>" /> 
                                </label>
                              </div>
                            </td>
                            <td><?= $service->service_name?></td>
                          </tr>
                        <?php endforeach ?>
                        </tbody>
                      </table>
                        <p><button type="submit" class="btn btn-info pull-right">Register Service</button></p>
                         </div>
                        <?php echo form_close();?>
                      </div>
                     </div>
             </div>
     </div>

</div>


