<?php 
include 'head.php';
?>

			<div class="page-content">
                <nav class="page-breadcrumb">
					<ol class="breadcrumb">
                        
						<li class="breadcrumb-item"><a href="#">Forms</a></li>
						<li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">Basic Form</h6>
								<form class="forms-sample">
									<div class="form-group">
										<label for="exampleInputUsername1">Username</label>
										<input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
									</div>
								
									<button type="submit" class="btn btn-primary mr-2">Update</button>
									<a href="users.html" class="btn btn-light">Return</a>
								</form>
              </div>
            </div>
					</div>
					
				</div>
				

			</div>

			<?php 
include 'foot.php';
?>