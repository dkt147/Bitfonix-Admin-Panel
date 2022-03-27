<?php 
include 'head.php';
?>

			<div class="page-content">

       
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Personal Expenses</h6>
                <p class="card-description">Remove false record if any.</p>
                 <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php

require "connection.php";

 $query="select * from personal";

$result= mysqli_query($conn,$query);
$total = 0;
while($row=mysqli_fetch_assoc($result))
{
    $total = $total + $row["amount"];
	?>


                      <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["reason"] ?></td>
                        <td><?php echo $row["type"] ?></td>
                        <td><?php echo $row["amount"] ?></td>
                        <td><?php echo $row["time"] ?></td>
                        <td><?php echo $row["date"] ?></td>
                        <td><a href=""> <i data-feather="edit"></i></a></td>
                        <td> <a href=""> <i data-feather="delete"></i> </a></td>
                        
                      </tr>


                      <?php

}


?>

                    </tbody>
                    <tfoot>
                        
<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="font-size:large">Total</td>
                        <td style="color: green;font-size:large">Rs. <?php echo $total;?></td>
                        <td></td>
                        <td></td>
                      
                        
                      </tr>
                    </tfoot>
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