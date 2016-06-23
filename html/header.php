<?php
require '../php/db.php';
$user_id=$_SESSION['user_id'];
$con=dboperation::getConnect();
$result=mysqli_query($con,"select * from older where older_id in (select older_id from older_user where user_id=$user_id)");
$row=mysqli_fetch_array($result);
if(!isset($_COOKIE['older_id'])){
    $older_id=$row['older_id'];
}
 ?>
        
        <div class="row header">
            <div class="col-md-3 header-left">
                <span><img src="../images/bg.png" alt="image" class="img-circle" id="index-image"></span>
                <span id="elder-name"><?php echo $row['name']; ?></span>
            </div>
            <div class="col-md-8 header-middle">
                <div class="dropdown">
                    <button class="dropbtn"><?php echo $row['name']; ?></button>
                    <div class="dropdown-content">
                        <?php 
                        while($row=mysqli_fetch_array($result))
                        {
                            echo "<a>".$row['name']."</a>";//onclick
                        }
                         ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <i class="icon-home icon-white"></i>
            </div>
        </div>
        