<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>
	<?php include 'css.php'; ?>
</head>

<body>
	<?php include 'menu.php'; ?>

	<div class="container ">
		<div class="row mt-1">
			<?php include 'slider.php'; ?>
		</div>
		<!-- <div class="row mt-1">

			<?php
			$sql = "SELECT * FROM products";
			$res = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($res)) {
				?>
				<div class="col-lg-4 col-md-4 col-sm-12 ">
					<div class="card viral-card m-1 text-center p-1">
						<h4>
							<?php echo $row["product"]; ?>
						</h4>
						<form action="semesters.php" method="POST">
							<button class="btn viral-card-2 m-3" type="submit" name="course_id"
								value="<?php echo $row["product_id"]; ?>">View</button>
						</form>
					</div> -->

				</div>
			<?php }
			?>
		</div>
       
	</div>
    <?php include 'footer.php'; ?>
	

	<?php include 'js.php'; ?>
</body>

</html>
     