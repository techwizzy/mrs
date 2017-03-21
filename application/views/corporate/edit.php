  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Edit Corporate</h4>
                                    <p class="category">Please Edit Corporate Information Below</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php foreach ($single_corporate as $corporate): ?>
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("corporate/edit");?>
                          <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <input type="hidden" id="hide" name="corporate_id" class="form-control" value="<?php echo $corporate->id;?>" >
                                        </div>
                                      </div>
                              </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label">Corporate Name</label>
                                          <input type="text" name="corporate_name" class="form-control" value="<?php echo $corporate->name;?>" >
                                        </div>
                                      </div>
                              </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Corporate Description</label>
                                  <input type="text" name="corporate_desc" class="form-control" value="<?php echo $corporate->desc;?>" >
                              </div>
                              </div>
                            </div>

                              <p><button type="submit" class="btn btn-info pull-right">Edit Corporate</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>
                      <?php endforeach; ?>


                      </div>


                     </div>
             </div>
     </div>

</div>
