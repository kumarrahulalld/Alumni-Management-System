<!----Authored by Sumit dhar dwivedi and Suraj Seth--->
<?php
session_start();
include("conn.php");
$sql="select * from registration where email='".$_SESSION["updatemail"]."' and password='".$_SESSION["updatepass"]."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
if($row)
{  
      
?>
<!DOCTYPE html>
<html lang="en">

    <head>
       
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Registartion CCE|Alumni</title>

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
     .area{
        border: 2px solid black;
        margin-left: 20%;
        margin-right: 20%;
         margin-top: 25px;
        background-color: teal;
        border-radius: 20px;
    }
* {
    margin: 0px;
    padding: 0px;
}
* {
    margin: 0px;
    padding: 0px;
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
                                <a class="navbar-brand custom_navbar-brand" style="height:130px;" href="#"><img src="img/ipsl.png" alt="" style="width:80px; height:80px;"></a>
                                <h2 style="margin-top:10px;">CENTER OF COMPUTER EDUDATION</h2>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    
                                    <li><a href="updateinfo.php">Logout</a></li>
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

<div class="panel-default">
<div class="panel-heading">   
    <div class="area" width:60%;height:45%>
         
<div class="panel-body" style="background- color:azure; margin: 0 0 0 15%; width:70%;">
    <center><h1 style="margin-top:20px;margin-bottom:10px;">Update Profile</h1></center><hr>
  <form method="post" action="regprocess.php" enctype="multipart/form-data">
      <div class="form-group">
          <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>" pattern="[a-zA-Z ]{0,20}">
      </div>
					  
      <div class="form-group">
          <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>" pattern="[a-zA-Z]{0,20}">
      </div>
						
      <div class="form-group">
          <span ><b>Sex</b>&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <label>Male&nbsp;&nbsp;<input type="radio" value="male" name="gender" <?php if($row['gender']== "male") echo "checked"; ?>></label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Female&nbsp;&nbsp;<input type="radio" value="female" name="gender" 
            <?php if($row['gender']== "female") echo "checked"; ?>   ></label>
          
      </div>
					  
      <div class="form-group">
          <input type="text" name="mobile" class="form-control"  value="<?php echo $row['mobile']; ?>"  pattern="[6-9]{1}[0-9]{9}">
      </div> 
      <div class="form-group">
          <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>"   >
      </div>		  
      <div class="form-group">
          <input type="text" name="dob" class="form-control hasDatepicker" value="<?php echo $row['dob']; ?>" pattern="[1]{1}[9]{1}[0-9]{2}+-[0-9]{2}+-[0-9]{2}" >
      </div>
					  
      <div class="form-group">
          <select name="year_of_passing" class="form-control" >
              <option value="" >Select year of passing</option>
              <option value="2001" <?php if($row['yop']=="2001") echo 'selected="selected"'; ?>>2001</option>
              <option value="2002" <?php if($row['yop']=="2002") echo 'selected="selected"'; ?>>2002</option>
              <option value="2003" <?php if($row['yop']=="2003") echo 'selected="selected"'; ?>>2003</option>
              <option value="2004" <?php if($row['yop']=="2004") echo 'selected="selected"'; ?>>2004</option>
              <option value="2005" <?php if($row['yop']=="2005") echo 'selected="selected"'; ?>>2005</option>
              <option value="2006" <?php if($row['yop']=="2006") echo 'selected="selected"'; ?>>2006</option>
              <option value="2007" <?php if($row['yop']=="2007") echo 'selected="selected"'; ?>>2007</option>
              <option value="2008" <?php if($row['yop']=="2008") echo 'selected="selected"'; ?>>2008</option>
              <option value="2009" <?php if($row['yop']=="2009") echo 'selected="selected"'; ?>>2009</option>
              <option value="2010" <?php if($row['yop']=="2010") echo 'selected="selected"'; ?>>2010</option>
              <option value="2011" <?php if($row['yop']=="2011") echo 'selected="selected"'; ?>>2011</option>
              <option value="2012" <?php if($row['yop']=="2012") echo 'selected="selected"'; ?>>2012</option>
              <option value="2013" <?php if($row['yop']=="2013") echo 'selected="selected"'; ?>>2013</option>
              <option value="2014" <?php if($row['yop']=="2014") echo 'selected="selected"'; ?>>2014</option>
              <option value="2015" <?php if($row['yop']=="2015") echo 'selected="selected"'; ?>>2015</option>
              <option value="2016" <?php if($row['yop']=="2016") echo 'selected="selected"'; ?>>2016</option>
              <option value="2017" <?php if($row['yop']=="2017") echo 'selected="selected"'; ?>>2017</option>
              <option value="2018" <?php if($row['yop']=="2018") echo 'selected="selected"'; ?>>2018</option>
          </select>
      </div>
					  
      <div class="form-group">
          <select name="degree" class="form-control">
              <option value="">Qualification</option>
              <option <?php if($row['degree']=="BCA") echo 'selected="selected"';?> value="BCA"  >BCA</option>
              <option <?php if($row['degree']=="MCA") echo 'selected="selected"'; ?> value="MCA" >MCA</option>
              <option <?php if($row['degree']=="PGDCA")echo 'selected="selected"';?> value="PGDCA">PGDCA</option>
          </select>
      </div>

      <div class="form-group">
          <span><b>Currently I am</b></span>&nbsp;
            <label>
                <input type="radio" name="work" value="self" <?php if($row['work']== "self") echo "checked"; ?> >&nbsp;&nbsp;Self employed </label>&nbsp;&nbsp;&nbsp;	
            <label><input type="radio" value="salaried" name="work" <?php if($row['work']=="salaried") echo "checked"; ?> >&nbsp;&nbsp;Salaried  </label>&nbsp;&nbsp;&nbsp;	
            <label><input type="radio" value="HomeMaker" name="work" <?php if($row['work']=="HomeMaker") echo "checked"; ?> >&nbsp;&nbsp;Home Maker</label>
         
          
      </div>
						
      <div class="form-group">
          <input type="text" name="co" value="<?php echo $row['co']; ?>"  pattern="[a-zA-Z]{}" class="form-control">
      </div>
      <div class="form-group">
          <input type="url" name="facebook" class="form-control" placeholder="https://www.facebook.com/Facebook Link" value="<?php echo $row['facebook']; ?>" placeholder="https://www.facebook.com/Link">
      </div>
      <div class="form-group">
        <input type="url" name="twitter" class="form-control" placeholder="https://www.twitter.com/Twitter Link" value="<?php echo $row['twitter'];?>" placeholder="https://www.twitter.com/Link" >
      </div>
      <div class="form-group">
          <input type="url" name="linkedin" class="form-control" placeholder="https://www.linkedin.com/Linkedin Link" value="<?php echo $row['linkedin']; ?>" placeholder="https://www.linkedin.com/Link">
      </div>
						
      <div class="form-group">
          <textarea name="moment" placeholder="About Yourself" pattern="[a-zA-Z]{0,300}"><?php echo $row['moment']; ?></textarea>
      </div>
                        
         <div class="upload-btn-wrapper">
  <button class="btns">Upload Image &nbsp;<i class="fa fa-upload"></i> </button>
             <input type="file" name="image" ><img src="img/<?php echo $row['image']; ?>"/>
             <?php $_SESSION["previmg"]=$row['image'];?>
</div>
						
      <div class="form-group">
         <center> <button type="submit" class="btn btn-primary" name="upsubmit">Submit</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;
             <button type="reset" style="background-color:red;" class="btn btn-primary" name="regsubmit">Reset</button></center>
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
<?php 
}
?>
