<!----Authored by Sumit dhar dwivedi and Suraj Seth--->
<?php
session_start();
include("conn.php");
if(isset($_POST['updatesubmit'])) 
    {   $_SESSION["updatepass"]=$_POST['pass'];
        $_SESSION["updatemail"]=$_POST['email'];
        $sql="select * from registration where email='".$_POST['email']."' and password='".$_POST['pass']."'";
        $row=mysqli_query($conn,$sql);
        if(mysqli_num_rows($row))
        {       
                $_SESSION["method"]="POST";
                echo "<script>alert('Verification Successful!')</script>";
                echo "<script>window.open('update.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Details not Find Try Again!!!!!')</script>";
            echo "<script>window.open('updateinfo.php','_self')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
       
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Add Events To CCE | Alumni</title>

        <!--    Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">
        <link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">
        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
<style type="text/css">
.panel-default {
    border-color: #ddd;
}
    .area{
        border: 2px solid black;
        margin-left: 20%;
        margin-right: 20%;
        background-color: teal;
        border-radius: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
    
 .panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
    
 .panel-body {
    padding: 15px;
}
    textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
element.style {
}
.enq-form input, textarea {
    resize: none;
    border: 1px solid #ddd;
    display: block;
    width: 100%;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 15px;
}

button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
textarea {
    overflow: auto;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
}
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btns {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 15px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
* {
    margin: 0px;
    padding: 0px;
}
* {
    margin: 0px;
    padding: 0px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
textarea {
    font-family: monospace;
    border-color: rgb(169, 169, 169);
}
user agent stylesheet
textarea {
    -webkit-appearance: textarea;
    background-color: white;
    -webkit-rtl-ordering: logical;
    flex-direction: column;
    resize: auto;
    cursor: text;
    white-space: pre-wrap;
    word-wrap: break-word;
    border-width: 1px;
    border-style: solid;
    border-color: initial;
    border-image: initial;
    padding: 2px;
}
user agent stylesheet
input, textarea, select, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em;
    font: 400 13.3333px Arial;
}
user agent stylesheet
input, textarea, select, button, meter, progress {
    -webkit-writing-mode: horizontal-tb !important;
}
    form {
    display: block;
    margin-top: 0em;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
    
    
.form-group {
    margin-bottom: 15px;
}

</style>
        <script>
            function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
        </script>
</head>
 <body data-spy="scroll" data-target="#header" style="background-color:white;">
<!--Start Hedaer Section-->
<div id="header">
            <div class="header-area">
                
                    
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header"style="height:110px;">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            <a class="navbar-brand custom_navbar-brand" style="height:130px;"><img src="img/ipsl.png" alt="IPS LOGO"  style="width:80px; height:80px;"></a>
                                <h2 style="margin-top:10px;">CENTER OF COMPUTER EDUCATION</h2>
                                
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1" >
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="forpass.php">Forgot Password <span class="sr-only"></span></a></li>
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
        </div>
        <!--End of Hedaer Section-->
<div class="panel-default">
<div class="panel-heading"> 
    <div class="area" width:20%;height:45%>
<div class="panel-body" style="background- color:cyan; margin: 0 0 0 35%; width:30%;">
    <center><h1 style="margin-top:5px;margin-bottom:15px;"> Update Profile </h1></center><hr/>
  <form method="post" action="" enctype="multipart/form-data" autocomplete="off">

      <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Email Id" value="" required>
      </div>				  
       <div class="form-group">
          <input type="password" name="pass" class="form-control" placeholder="Password" value="" id="myInput" required><br/>
           <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
      </div>			
      <div class="form-group">
          <center><input type="submit" class="btn btn-primary" name="updatesubmit" value="SUBMIT"></center>
      </div>
    </form>
    
    </div>
    </div>
</div>
     </div>
    <!--Start of footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </body>
</html>


