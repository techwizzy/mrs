<section >
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
    <div class="col-md-9">
        <div class="content-box-large">
            <div class="panel-heading">
                <h3>All Patients</h3>
                <table id="resultTable" class="table table-bordered " >
          
                                      <thead class="text-primary">
                                          <th>No</th>
                                        <th>Refrence No</th>
                                        <th>Patient ID</th>
                                        <th>Total Amount</th>
                                        <th>Total Paid</th>
                                        <th>Status</th>
                                      </thead>
                                      <tbody>
                                       <?php $no=1 ?>
                                          <?php foreach ($transaction as $transaction): ?>
                                            
                                          <tr>
                                          <td><?= $no; ?></td>
                                            <td><?= $transaction->ref_no?></td>
                                            <td><?= $transaction->pid?></td>
                                            <td><?= $transaction->total_amount?></td>
                                            <td><?= $transaction->total_paid?></td>
                                            <td><?= $transaction->payment_status?></td>
                                          </tr>
                                         <?php $no=$no+1; ?>
                                         <?php endforeach ?>
                                          
                                          
                                      </tbody>

                        </table>                   
              </div>
           </div>
</section>