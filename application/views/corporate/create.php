  <div class="content">
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">
                    </div>
                      <div class="col-md-8">
                      <div class="card">
                              <div class="card-header" data-background-color="blue">
                                  <h4 class="title">Add Corporate</h4>
                                    <p class="category">Please Enter Corporate Information Below</p>
                              </div>
                              <div class="card-content">
                        
                           
                         <!-- <div id="infoMessage"><?php echo $message;?></div> -->
                         <?php echo validation_errors(); ?>
                        <?php echo form_open("corporate/create");?>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                          <label class="control-label">Corporate Name</label>
                                          <input type="text" name="corporate_name" class="form-control" >
                                        </div>
                                      </div>
                              </div>
                             <div class="row">
                               <div class="col-md-12">

                              <div class="form-group label-floating">
                                  <label class="control-label">Corporate Description</label>
                                  <input type="text" name="corporate_desc" class="form-control" >
                              </div>
                              </div>
                            </div>

                              <p><button type="submit" class="btn btn-info pull-right">Create Corporate</button>
                                      </p>
                         </div>
                        <?php echo form_close();?>


                      </div>


                     </div>
             </div>
     </div>

</div>
