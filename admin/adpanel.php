<?php 
session_start(); 
if($_SESSION["method"]=="POST")
{
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  
  
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
    </head>

<body data-spy="scroll" data-target="#header" style="background-color: white;">
<!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                
                    
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header" style="height:110px;">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" style="height:130px;" href="#"><img src="../img/ipsl.png" alt="" style="width:80px; height:80px;"></a>
                                <h2 style="margin-top:10px;">CENTER OF COMPUTER EDUDATION</h2>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li><a href="../event.php">Events</a></li>
                                    <li><a href="#feedback">Feedbacks</a></li>
                                    <li><a href="../stars.php">Add Top Performers</a></li>
                                    <li><a href="../organisations.php">Add Compnies Profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->


  <section class="container">
    <div class="page-header">
        <h1><center style="font-family:sans-serif;">Alumni Details</center>
          </h1>
    </div>
    
<?php
include("../conn.php");
$query="select * from registration where status='NO'";
$res=mysqli_query($conn,$query);
      
if($res)
{
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
      
        <div class="col-md-4 col-sm-6 col-xs-12">
            <article class="material-card Red">
                <h2>
                    <span>
                        <?php echo $row['fname']." ".$row['lname']; ?>
                    </span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i><?php echo $row['co']; ?>
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="../img/<?php echo $row['image']; ?> " style="height:320px;width:350px;"> 
                    </div>
                    <div class="mc-description">
                         <?php echo "Date of Birth ".$row['dob']; echo "<br>";
                                echo "Degree ".$row['degree']; echo "<br>";
                                echo "Year of Passing ".$row['yop']; echo "<br>";
                                echo "Mobile No. ".$row['mobile']; echo "<br>";
                                echo "Email ".$row['email']; echo "<br>";
                        ?>
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        Social
                    </h4>
                    <a class="fa fa-fw fa-facebook" href="<?php echo $row['facebook']; ?>"></a>
                    <a class="fa fa-fw fa-twitter" href="<?php echo $row['twitter']; ?>"></a>
                    <a class="fa fa-fw fa-linkedin" href="<?php echo $row['linkedin']; ?>"></a>
                    <a class="fa fa-fw fa-envelope" href="<?php echo $row['email']; ?>"></a>
                   <?php $_SESSION["em"]=$row['email']; ?>
                </div>
            </article> 
                  <div class="form-group">
                      <form method="post" action="../regprocess.php">
         <center> <button type="submit" class="btn btn-primary" name="add">Add</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;
             <button type="submit" style="background-color:red;" class="btn btn-primary" name="remove">Remove</button></center>
                      </form>
            </div>
                      
        </div>
    
    <?php 
    } 
}
?>
</section>

<?php 
    
    include("feedback.php");
    include("../footer.php");
?>
    
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

    
</body>
</html>
<?php } 
else
{
    echo "<script>alert('Unauthorized Access Try Again!!!!!')</script>";
    header("Location:../admin.php");
}?>
    