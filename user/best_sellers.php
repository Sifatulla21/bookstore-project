<?php
require_once 'header.php';
require_once '../config.php';

$output=""; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<table class="sidebar">
			<tr><td>CATEGORY</td></tr>
                <tr><td><a href="best_sellers.php">Best Sellers</a></td></tr>
                <tr><td><a href="cse.php">CSE</a></td></tr>
                <tr><td><a href="eee.php">EEE</a></td></tr>
                <tr><td><a href="bba.php">BBA</a></td></tr>
                <tr><td><a href="english.php">ENGLISH</a></td></tr>
                <tr><td><a href="math.php">MATH AND PHYSICS</a></td></tr>
			</table>
		</div>
		<div class="col-sm-9">
			<span id="status"></span>
			<div class="tag">BEST SELLERS</div>
			<div class="row">

				<?php 


					$sql = "SELECT * FROM books WHERE category = 'BEST' ORDER BY book_id ASC";
					$result = mysqli_query($link,$sql);

					while ($row = mysqli_fetch_array($result)) {
						
						$output .='<div class="col-sm-4" id="product">
							<img src="'.$row['img'].'" width="80%" height="200">
							<h5 style="font-size:medium">'.$row['book_name'].'</h5>
							<h5 style="font-size:x-small">'.$row['author'].'</h5>
							<h5 style="font-size:larger;color:red">&#2547 '.$row['price'].'</h5>
							<form name="form" method="post">
							<input type="hidden" name="book_id" id="book_id'.$row['book_id'].'" value="'.$row['book_id'].'">
							<input type="hidden" name="book_name" id="book_name'.$row['book_id'].'" value="'.$row['book_name'].'">
							<input type="hidden" name="img" id="img'.$row['book_id'].'" value="'.$row['img'].'">
							<input type="hidden" name="price" id="price'.$row['book_id'].'" value="'.$row['price'].'">';
							if (!isset($_SESSION['loggedin'])) {
								$output.= '<input type="submit" name="submit" value="ADD TO CART" 
								class="btn btn-primary login" style="width:80%;background-color:crimson">';
								}else
								{
								$output .= '<button type="button" name="add_to_cart" id="'.$row['book_id'].'" class="btn btn-primary" style="width:80%;background-color:crimson">ADD TO CART </button>';
								}
							$output.='</form> </div>';
						
					}

					echo $output;

				?>


			
			
			

		</div>

		</div>
	</div>

<?php

include_once 'footer.php';

?>