
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
								<div class="card-content table-responsive">
	                                
						              <div class="">
						                <div class="box box-solid">
						              	     <div class="box-header">
						                        <h4 align="center"><i class="fa fa-suitcase"></i>Receive Payment By Choosing a method Below</h4>
						                    <?php foreach ($patient as $patient): ?>
						                        <div align="center">
						                            <?php echo anchor("payment/cash", '<button class="btn btn-info"><i class="fa fa-money icon-large"></i><br>Cash</button>') ;?>
						                            <?php echo anchor("payment/check", '<button class="btn btn-info"><i class="fa fa-keyboard-o icon-large"></i><br>Check</button>') ;?>
						                            <?php echo anchor("payment/credit", '<button class="btn btn-info"><i class="fa fa-credit-card fa-large"></i><br> Credit card</button>') ;?>
						                            <?php echo anchor("payment/corporate", '<button class="btn btn-info"><i class="fa fa-address-card-o icon-large"></i><br>Corporate</button>') ;?>
						                           	<?php echo anchor("payment/mpesa", '<button class="btn btn-info"> <i class="fa fa-mobile-phone"></i><br>Mpesa</button>') ;?>
						                        </div>
						                    <?php endforeach ?>
						                    </div>
						                </div>
						            </div>
                        
	                            </div>                          
                   
</section>