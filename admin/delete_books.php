<?php
require_once '../config.php';
 require_once 'header.php';
 require_once 'logincheck.php';

$output ="";

if (isset($_POST['q'])) {

    $book_id = $_POST['book_id'];
	
	if($book_id == ""){
		
		$output = '<div class="alert alert-info">Please enter book id to delete</div>';
	
	}else{


      $sql = "DELETE FROM books WHERE book_id = '$book_id'";

      mysqli_query($link,$sql);

      if (mysqli_affected_rows($link) == 0) {
          
          $output = '<div class="alert alert-info">No Book found with this id</div>';
      }else{

        $output = '<div class="alert alert-success">Book removed successfully</div>';
      }


   
	}
}



  ?>
 <div class="container">
   <div class="row">
     <div class="col-lg-2">
     </div>
     <div class="col-lg-10">
       <form class="form-inline" method="post">
     <input class="form-control mr-sm-2" name="book_id" type="text" placeholder="Enter book id" aria-label="Search">
     <input class="btn btn-outline-success my-2 my-sm-0" name="q" type="submit" value="Delete"> &nbsp;&nbsp;

   </form>
   <br>
   <br>
    <?php echo $output; ?>
     </div>
   </div>
 </div>
<?php require_once 'footer.php'; ?>
