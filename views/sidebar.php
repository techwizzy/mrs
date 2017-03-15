
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
	                <li class="active">
	                    
	                     <a href="<?= site_url('auth/index') ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>



	                <ul>

	                <li>
	                   <a href="<?= site_url('expenses/add_expense') ?>">
	                        <i class="material-icons">content_paste</i>
	                        
	                         <p>Add Expense</p>
	                    </a>
	                </li>

	                <li>
	                   <a href="<?= site_url('expenses/index') ?>">
	                        <i class="material-icons">content_paste</i>
	                        <p>Expenses</p>
	                         
	                    </a>
	                </li>
	                


	                </ul>
	                <li>
	                   <a href="<?= site_url('Services/index') ?>">
	                        <i class="material-icons">library_books</i>
	                        <p>Services</p>
	                    </a>
	                </li>
	                 <li>
	                   <a href="<?= site_url('Patient/index') ?>">
	                        <i class="material-icons">library_books</i>
	                        <p>Patient Registration</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="icons.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Icons</p>
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
