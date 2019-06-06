<?php 
	include 'conn.php';
	$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result = $conn->query("SELECT * FROM  vehicles LIMIT $start, $limit");
	$vehicles = $result->fetch_all(MYSQLI_ASSOC);

	$result1 = $conn->query("SELECT count(id) AS id FROM vehicles");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>177 vehicles </title>
	<link rel="stylesheet" type="text/css" href="../library/css/bootstrap.min.css"/>
	<script type="text/javascript" src="../library/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="container well">
		<h1 class="text-center">Search Long Chevrolet Buick GMC Vehicles</h1>
		<div class="row">
			<div class="col-md-10">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li>
				      <a href="index.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Previous</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li><a href="index.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li>
				      <a href="index.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Next &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			<div class="text-center" style="margin-top: 20px; " class="col-md-2">
				<form method="post" action="#">
						<select name="limit-records" id="limit-records">

							<option disabled="disabled" selected="selected">---Limit Records---</option>
							<?php foreach([10,100,500,1000,5000] as $limit): ?>
								<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
							<?php endforeach; ?>
						</select>
					</form>
				</div>
        </div>
        


        <!--Image 1-->
        <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                            <span class="product-price">$</span> 
                        <div class="product-description" style="text-align: left;">
                            <small class="text-muted">GMC</small>
                            <a href="/gs-vehicle/view?vehicleId=725" class="product-name"></a>
                            <div class="small">
                                    <div class="row">
                                        <div class="col">Make</div>
                                        <div class="col"></div>
                                    </div>
                                     <div class="row">
                                        <div class="col">MSRP</div>
                                            <div class="col"></div>
                                        </div>
                                    <div class="row">
                                            <div class="col">Savings Up To:</div>
                                            <div class="col"> </div>
                                    </div>
                                    <div class="row">
                                            <div class="col">As Low As:</div>
                                            <div class="col"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col">Stock #:</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="row"><div class="col"> Mileage:
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>

	
                
	        	<div class="card-body">

	        		<?php foreach($vehicles as $vehicles) :  ?>
		        		<tr>
		        			<td><?= $vehicles['id']; ?></td>
		        			<td><?= $vehicles['make']; ?></td>
		        			<td><?= $vehicles['description']; ?></td>
		        			<td><?= $vehicles['msrp']; ?></td>
                            <td><?= $vehicles['v_condition']; ?></td>
                            <td><?= $vehicles['savings']; ?></td>
                            <td><?= $vehicles['aslowas']; ?></td>
                            <td><?= $vehicles['mileage']; ?></td>
                            <td><?= $vehicles['stock_number']; ?></td>
                            <td> <?= $vehicles['image']; ?></td>

		        		</tr>
	        		<?php endforeach; ?>
</div>
                

      		
        </div>
        




<div style="position: fixed; bottom: 10px; right: 10px; color: green;">
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
</body>
</html>
