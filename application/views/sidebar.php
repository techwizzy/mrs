
	    <div class="sidebar" data-color="blue" data-image="<?= base_url() ?>assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					<?= $this->config->item('app_title') ?>
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="<?= site_url('') ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= site_url('appointment/index') ?>">
	                        <i class="material-icons">schedule</i>
	                        <p>Appointment</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= site_url('corporate/index') ?>">
	                        <i class="material-icons">folder_shared</i>
	                        <p>Corporate</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= site_url('expenses/index') ?>">
	                        <i class="material-icons">monetization_on</i>
	                        <p>Expenses</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= site_url('services/index') ?>">
	                        <i class="material-icons">local_hospital</i>
	                        <p>Services</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= site_url('auth/index') ?>">
	                        <i class="material-icons">User management</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
				
	            </ul>
	    	</div>
	    </div>
