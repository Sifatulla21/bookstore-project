<?php  
require_once 'header.php';
require_once '../config.php';
$output=""; 

if(!$link){

	echo "<script> window.location.href = 'error.php' </script>";
}   ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3 ">
			
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
					 $_SESSION['sorter'] ='id';
					 $_SESSION['order'] = "DESC";
					$_SESSION['text'] = "most helpful";
					while ($row = mysqli_fetch_array($result)) {
						
						$output .='<div class="col-sm-4" id="product">
							<a href="book_details.php?id='.$row['book_id'].'"><img src="'.$row['img'].'" width="80%" height="200"></a>
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
				<div class="more"> <a href="best_sellers.php"></a> </div>
			</div>
			<br>
			<div class="tag">CSE</div>
			<div class="row">

				<?php 

					$output = '';
					$sql = "SELECT * FROM books WHERE category = 'CSE' ORDER BY book_id ASC LIMIT 6";
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
				<div class="more"> <a href="cse.php" ></a> </div>
			</div>
			<br>
			<div class="tag">EEE</div>
			<div class="row">

				<?php 

					$output = '';
					$sql = "SELECT * FROM books WHERE category = 'EEE' ORDER BY book_id ASC LIMIT 6";
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
				<div class="more"> <a href="eee.php"></a> </div>
			</div>

		</div>

		</div>
	</div>
	<!-- Login  Modal -->
<div class="modal" id="LoginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login to  Book Store</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <span id="help" class="text-danger"></span>


      <form class="" action="" method="post">
        <div class="form-group">
          <i class="fa fa-envelope"></i> <label for="">&nbsp;&nbsp;Email</label>
          <input type="text" name="username" id="username" value="" class="form-control" placeholder="Enter username">
          <!--<span class="text-danger"><?php echo $username_err ?> </span>-->
  </div>
  <div class="form-group">
          <i class="fa fa-key"></i> <label for="">&nbsp;&nbsp;Password</label>
          <input type="password" name="password" id="password" value="" class="form-control" placeholder="Enter password">
          <!--<span class="text-danger"><?php echo $password_err ?></span> -->
  </div>


  <div class="form-group">
  <input type="submit" id="login" name="submit"  class="btn btn-success" style="width:100%" value="Login">
  
  </div>
  </form>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <h6> New to Book Store? <a href="signup.php"> Join Now </a> </h6>
      </div>

    </div>
  </div>

	
<?php  require_once 'footer.php'; ?>

