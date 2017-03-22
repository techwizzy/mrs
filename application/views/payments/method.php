
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Simple Table</h4>
	                                <p class="category">Here is a subtitle for this table</p>
	                            </div>
								<div class="card-content table-responsive">
	                                
						              <div class="">
						                <div class="box box-solid">
						              	     <div class="box-header">
						                        <h4 align="center"><i class="fa fa-suitcase"></i>Receive Payment By Choosing a method Below</h4>
						                    <?php foreach ($patient as $patient): ?>
						                        <div align="center">
						                            <?php echo anchor("payment/cash", '<button class="btn btn-info"><i class="fa fa-money icon-large"></i><br>Cash</button>') ;?>
						                            <?php echo anchor("payment/check/".$patient->file_no, '<button class="btn btn-info"><i class="fa fa-keyboard-o icon-large"></i><br>Check</button>') ;?>
						                            <?php echo anchor("payment/credit/".$patient->file_no, '<button class="btn btn-info"><i class="fa fa-credit-card fa-large"></i><br> Credit card</button>') ;?>
						                            <?php echo anchor("payment/corporate/".$patient->file_no, '<button class="btn btn-info"><i class="fa fa-address-card-o icon-large"></i><br>Corporate</button>') ;?>
						                           	<?php echo anchor("payment/mpesa/".$patient->file_no, '<button class="btn btn-info"><i class="<i class="fa fa-mobile-phone"></i><br>Mpesa</button>') ;?>
						                        </div>
						                    <?php endforeach ?>
						                    </div>
						                </div>
						            </div>
                        
	                            </div>