<?php

  require_once 'header.php';
  require_once 'logincheck.php';

 
 ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-sm-3">
      <div id="dashboard" class="w-100 bg-info p-2">
      <h5 class="text-white bg-danger" style="display: table;width: 100%;height: 40px;text-align: center;line-height: 40px;" ><strong> DASHBOARD</strong></h5>
      <hr>
      
      <a href="" class="text-white" style="height: 25px; width: 100%;display: table;"><b>TOTAL ORDERS</b> <span class="badge badge-warning float-right "><?php echo $num; ?></span></a>  
      <hr>  
      <a href="" class="text-white" style="height: 25px; width: 100%;display: table;"><b>NEW ORDERS</b> <span class="badge badge-warning float-right " id="notif"><?php echo $noti;  ?></span></a>
      </div>

    </div>
    <div class="col-lg-9">
      <div class="alert alert-success" style="background-color:#34ce57; color:white; text-align:center;">
          <h5>Welcome to Admin Panel</h5>

      </div>
      <div class="card-deck">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/users.png" alt="Card image cap" height="200">
  <div class="card-body">
    <h3 class="card-title text-primary">Registered Users</h3>

    <a href="registered_users.php" class="btn btn-success" style="width:100%;">View Users</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
<img class="card-img-top" src="images/books.jpg" alt="Card image cap" height="200">
<div class="card-body">
<h3 class="card-title text-primary">Manage Books</h3>

<a href="manage_books.php" class="btn btn-success" style="width:100%;">View & Manage Books</a>
</div>
</div>
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="images/order.png" alt="Card image cap" height="200">
<div class="card-body">
<h3 class="card-title text-primary">Orders History</h3>

<a href="orders.php" class="btn btn-success" style="width:100%;">View & Manage Orders</a>
</div>
</div>
</div>
    </div>
  </div>
</div>
<?php require_once 'footer.php'; ?>
