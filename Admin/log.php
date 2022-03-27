<?php 
include 'head.php';
?>

			<div class="page-content">

       
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Transaction Table</h6>
                <p class="card-description">Remove false transaction if any.</p>
                 <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Log Detail</th>
                        <th>Time</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php

require "connection.php";

 $query="select * from activity_log";

$result= mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
	?>


                      <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["user_id"] ?></td>
                        <td><?php echo $row["log"] ?></td>
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