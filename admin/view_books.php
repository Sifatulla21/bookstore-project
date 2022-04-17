<?php
require_once '../config.php';
 require_once 'header.php';
 require_once 'logincheck.php';
$output ="";
$users="";
 if (isset($_POST['q'])) {
   $book_id= test_input($_POST['book_id']);
   $sql = "SELECT * FROM books WHERE book_id = '$book_id'";

   $result = mysqli_query($link,$sql);

   if(mysqli_num_rows($result)>0)
   {
      while ($row = mysqli_fetch_array($result)) {

        $output = '<table class="table">
          <tr>
            <th>book_id</th>
            <th>Book Name</th>
            <th>author</th>
            <th>Price</th>
            <th>Image</th>
          </tr>
          <tr>
            <td>'.$row['book_id'].'</td>
            <td>'.$row['book_name'].'</td>
            <td>'.$row['author'].'</td>
            <td>'.$row['price'].'</td>
            <td><img src="'.$row["img"].'" height="100" width="100"></td>
            </tr>

        </table>';
      }
   }else {
     $output = '<div class="alert alert-danger">No record found</div>';
   }
 }

 if (isset($_POST['all'])) {

   $sql = "SELECT * FROM books";

   $result = mysqli_query($link,$sql);

   $books = mysqli_num_rows($result);

   if(mysqli_num_rows($result)>0)
   {
     $output .= '
    <h4 class="text-success"> Total Books: '.$books.'</h4>
     <table class="table">
       <tr>
       <th>book_id</th>
       <th>Book Name</th>
       <th>author</th>
       <th>Price</th>
       <th>Image</th>
       </tr>';
      while ($row = mysqli_fetch_array($result)) {

        $output .= '
          <tr>
          <td>'.$row['book_id'].'</td>
          <td>'.$row['book_name'].'</td>
          <td>'.$row['author'].'</td>
          <td>'.$row['price'].'</td>
          <td><img src="'.$row["img"].'" height="100" width="100"></td>
          </tr>';
      }
      $output .= '</table>';
   }else {
     $output = '<div class="alert alert-danger">No record found</div>';
   }

 }


 function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
  ?>
 <div class="container">
   <div class="row">
     <div class="col-lg-2">
     </div>
     <div class="col-lg-10">
       <form class="form-inline" method="post">
     <input class="form-control mr-sm-2" name="book_id" type="text" placeholder="Enter Book id" aria-label="Search">
     <input class="btn btn-outline-success my-2 my-sm-0" name="q" type="submit" value="Search"> &nbsp;&nbsp;
     <button class="btn btn-outline-success my-2 my-sm-0" name="all" type="submit">View All</button>
   </form>
      <br><br>

        <?php echo $output; ?>

     </div>
   </div>
 </div>

<?php require_once 'footer.php'; ?> 
