 <script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
 <section style="margin-top:30px">
                  <div class="row">
                                  <div class="col-md-3">
                                     <div class="sidebar content-box-large" style="display: block;">
                                        <ul class="nav">
                                            <!-- Main menu -->
                                            <li><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
                                            <li class="current"><a href="<?= site_url('services/register') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-check-circle"></i>Start a visit</a></li>
                                            <li><a href="<?= site_url('auth/index') ?>" <?php if (isset($link_status) && $sub_token=='users'): ?> <?= $active_style ?><?php endif ?>><i class="glyphicon glyphicon-calendar"></i> schedule appointment</a></li>
                                            <li><a href="<?= site_url('patient/index') ?>" <?php if (isset($link_status) && $sub_token=='patient_search'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-book"></i> Patient notes</a></li>
                                            <li><a href="<?= site_url('patient/create_patient') ?>" <?php if (isset($link_status) && $sub_token=='backup'): ?> <?= $active_style ?><?php endif ?>><i class="fa fa-money"></i> Payments</a></li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="content">
                                          <div class="container-fluid">
                                                <div class="row">
                                                        <div class="col-md-4">
                                                        <div class="sidebar content-box-large" style="display: block;">      
                                                        <div class="card-content">
                                                           <?php echo validation_errors(); ?>
                                                          <?php echo form_open("services/register");?>
                                                          <table class="table table-bordered table-sm">
                                                          <tbody>
                                                          <?php foreach ($services as $service): ?>
                                                            <tr>
                                                              <td>
                                                                <div class="checkbox">
                                                                  <label>
                                                                    <input type="checkbox" name="service_name[]" value="<?php echo $service->service_name;?>" value2 = "<?php echo $service->service_cost;?>" /> 
                                                                    <input type="hidden" name="service_cost[]" value="<?php echo $service->service_cost;?>" /> 
                                                                  </label>
                                                                </div>
                                                              </td>
                                                              <td><?= $service->service_name?></td>
                                                            </tr>
                                                          <?php endforeach ?>
                                                          </tbody>
                                                        </table>
                                                          <p><button name="select" type="submit" class="btn btn-info pull-right">Register Service</button></p>
                                                           </div>
                                                          <?php echo form_close();?>
                                                          <br>
                                                        </div>
                                                       </div>
                                                       <div class="col-md-4">
                                                        <div class="sidebar content-box-large" style="display: block;">      
                                                        <div class="card-content">
                                                           <?php echo validation_errors(); ?>
                                                          <?php echo form_open("services/waiting");?>
                                                          <table class="table table-bordered table-inverse table-sm">
                                                          <tbody>
                                                            <tr>
                                                              <td>
                                                                <div class="selected"></div>
                                                              </td>
                                                              <td>
                                                              <div class="total"></div>
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                          <p><button type="submit" class="btn btn-info pull-right">Add to waiting list</button></p>
                                                          <?php echo form_close();?>
                                                          </div>
                                                          <br>
                                                        </div>
                                                       </div>
                                               </div>

                                       </div>

                                  </div>

