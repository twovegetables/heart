<?php
require '../php/db.php';
$user_id=$_SESSION['user_id'];
$con=dboperation::getConnect();
$result=mysqli_query($con,"select * from older where older_id in (select older_id from older_user where user_id=$user_id)");
$row=mysqli_fetch_array($result);
$older_id=0;
$older_name="";

if(isset($_GET['older_id']))
{
    $older_id=$_GET['older_id'];
    $result1=mysqli_query($con,"select * from older where older_id =$older_id");
    $row1=mysqli_fetch_array($result1);
    $older_name=$row1['name'];
    setcookie('older_id',$older_id,time()+2000);
}
else if(!isset($_COOKIE['older_id'])){
    $older_id=$row['older_id'];
    $older_name=$row['name'];
    setcookie('older_id',$older_id,time()+2000);
}
else
{
    $older_id=$_COOKIE['older_id'];
    $result1=mysqli_query($con,"select * from older where older_id =$older_id");
    $row1=mysqli_fetch_array($result1);
    $older_name=$row1['name'];
    setcookie('older_id',$older_id,time()+2000);
}

 ?>  
        <div class="row header">
            <div class="col-md-3 header-left">
                <span><img src="<?php echo $row1['picture'];?>" alt="image" class="img-circle" id="index-image"></span>
                <span id="elder-name"><?php echo $older_name; ?></span>
            </div>
            <div class="col-md-8 header-middle">
                <div class="dropdown">
                    <button class="dropbtn"><?php echo $older_name; ?></button>
                    <div class="dropdown-content">
                        <?php 
                        do{
                            echo '<a href="personal.php?older_id='.$row['older_id'].'">'.$row['name']."</a>";
                        }while($row=mysqli_fetch_array($result))
                         ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <i class="icon-home icon-white"></i>
            </div>
        </div>
