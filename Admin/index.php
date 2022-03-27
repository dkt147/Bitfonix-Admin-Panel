<?php 
include 'head.php';
?>

			<div class="page-content">

       
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Project Details</h6>
                <p class="card-description">Monitor your project under one roof.</p>
                 <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance</th>
                        <th>Time</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php

require "connection.php";

 $query="select * from projects";

$result= mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
	?>


                      <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["credit"] ?></td>
                        <td><?php echo $row["debit"] ?></td>
                        <td><?php echo $row["balance"] ?></td>
                        <td><?php echo $row["time"] ?></td>
                        <td><?php echo $row["date"] ?></td>
                        
                      </tr>


                      <?php

}


?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>


<?php 
include 'foot.php';
?>