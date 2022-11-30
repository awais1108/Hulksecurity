<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","hulksecurity2022");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM users";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
     $total_pages = ceil($total_rows / $no_of_records_per_page);
$cnt=1;
        $sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);?>
    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact no</th>
<!--
											<th>Shipping Address/City </th>
											<th>Billing Address/City </th>
-->
											<th>Reg. Date </th>
										
										</tr>
									</thead>
									<tbody>
    
    <?php    while($row = mysqli_fetch_array($res_data)){?>
         	<tr>
											<td><?php echo htmlentities($row['id']);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td> <?php echo htmlentities($row['contactno']);?></td>
<!--
											<td><?php echo htmlentities($row['shippingAddress'].",".$row['shippingCity'].",".$row['shippingState']."-".$row['shippingPincode']);
                                                ?></td>
											<td>
                                            <?php echo htmlentities($row['billingAddress'].",".$row['billingCity'].",".$row['billingState']."-".$row['billingPincode']);
                                            ?></td>
-->
											<td><?php echo htmlentities($row['regDate']);?></td>
                                        </tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
        
    
    
    
    <?php    
        mysqli_close($conn);
    ?>
                    <div class="pagination-box text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item active"><a href="?pageno=1">First</a></li>
                                <?php    for($i=1;$i<=$total_pages;$i++)
                                    {?>                                    
                                    <li class="list-inline-item "> <a href="?pageno=<?php echo $i; ?>" ><?php echo $i;?></a>
                                    </li>
                                    
                                <?php } ?>
                                    <li class="list-inline-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                    </li>
                                    <li class="list-inline-item"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                    </div>
<!--
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
-->
</body>
</html>