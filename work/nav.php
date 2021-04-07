					<?php

					?>
					<div id="bar" class="row px-0 textcol">
					<div class="col-12 m-0 px-0">
						<nav class="navbar navbar-expand-sm navbar-dark">
						  	<h3 class="navbar-brand display-inline"> <i class="fas fa-house-damage"></i> CARET PROPERTY</h3>		
						    <!-- fix your collapse nav bar -->
						    <button class="navbar-toggler " style="border: 1px solid white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
						      <span class="navbar-toggler-icon"></span>
						    </button>
						    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						      	<ul class="navbar-nav me-auto mb-2">	
							     	<li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							        		<a href="index.php" class="textcol">Home</a>
							        	</button>
							       	</li>
							       	<li class="nav-item ml-2 my-1">
								    	<button class="nav-link btn btn-sm btn-outline-light px-1">
								    		<a href="listing.php" class="textcol">Listing</a>
								    	</button>
								    </li>
							       	<li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							        		<a href="hire.php" class="textcol">Hire Here</a>
							        	</button>
							       	</li>
							       	<?php
							       	if (!isset($_SESSION['id'])) {
							       	?>			         
							        <li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							        		<a href="signup.php" class="textcol">Signup</a>
							        	</button>
							       	</li>

							       	<li class="nav-item ml-2 my-1">
							          <button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							          	<a href="loginpae.php" class="textcol">Login</a>
							          </button>
							       	</li>
							       	<?php
							       }
							       	?>
							       
							         <?php
							         	if (!isset($_SESSION['id'])) {
							         ?>
							        <li class="nav-item ml-2 my-1">
							          	<button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							          		<a href="advertise.php" class="textcol">Advertise</a>
							          	</button>
							       	</li>
								    <?php
										}
							         ?>


							        <?php
							        if (isset($_SESSION['id'])) {
							        ?>
							        <li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1" aria-current="page">
							        		<a href="profile.php" class="textcol"><?php echo(strtoupper($_SESSION['username'])).' PROFILE'?></a>
							        	</button>
							       	</li>
							       	<?php
							        }
							        ?>
							        <li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1">
							        		<a href="contactus.php" class="textcol">
							        			<i class="fas fa-user-circle textcol pr-1"></i>Contact Us
							        		</a>
							        	</button>
							        </li>
							      <?php
							      	if (isset($_SESSION['id'])){
							      	?>
							      	<li class="nav-item ml-2 my-1">
							        	<button class="nav-link btn btn-sm btn-outline-light px-1 " aria-current="page">
							          		<a href="logout.php" class="textcol">Logout</a>
							          	</button>
							       	</li>
							       	<?php
							      		}
							      	?>
						       	</ul>
						    </div>
						 
						</nav>
						</div>
						
					</div>
				