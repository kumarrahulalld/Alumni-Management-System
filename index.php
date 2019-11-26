<!----Authored by Sumit dhar dwivedi  and Suraj Seth--->
<?php
session_start();
include("conn.php");
     ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Alumni | CCE</title>

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
        <style>
         .carousel-inner{
            width:auto;
             margin: auto;
             height: auto;
            }
            .flex-container {
  display: flex;
  flex-wrap: wrap;
                float: left;
            }
            </style>
        <script type = "text/javascript">
function changeSize(){document.getElementById('test').style.height = '200'}
</script>
    </head>

    <body data-spy="scroll" data-target="#header" style="background-color:white;" >

        <!--Start Hedaer Section-->
        <div id="header">
            <div class="header-area">
                
                    
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header" style="height:110px;">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            <a class="navbar-brand custom_navbar-brand" style="height:130px;"><img src="img/ipsl.png" alt="IPS LOGO"  style="width:80px; height:80px;"></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1" >
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="#header" onclick="myFunction()">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#counter" onclick="myFunction1()">Achievements</a></li>
                                    <li><a href="#testimonial" onclick="myFunction2()">Achievers</a></li>
                                    <li><a href="#event" onclick="myFunction3()">event</a></li>
                                    <li><a href="regform.php">join us</a></li>
                                    <li><a href="admin/table.php">Alumni</a></li>
                                    
                                    <li><a href="#contact" onclick="myFunction5()">Feedback and Query</a></li>
                                    
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

<script>
function myFunction(x) {
    location.replace("index.php#header")
}
    function myFunction1(x) {
    location.replace("index.php#counter")
}
    function myFunction2(x) {
    location.replace("index.php#testimonial")
}
    function myFunction3(x) {
    location.replace("index.php#event")
}
    function myFunction4(x) {
    location.replace("index.php#purches")
}
        function myFunction5(x) {
    location.replace("index.php#contact")
}
</script>

        <!--Start of slider section-->
        <div id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/s13.JPG" alt="...">
                        </div>
                    </div>
                    
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s2.png" alt="...">
                          
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s3.png" alt="...">
                      
                        </div>
                    </div>
                    <!--End of item-->
					  <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s4.png" alt="...">
                       
                        </div>
                    </div>
					  <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s5.jpg" alt="...">
                       
                        </div>
                    </div>
					  <div class="item" >
                        <div class="slider_overlay">
                            <img src="img/s6.jpg" alt="...">
                    
                        </div>
                    </div>
                                        <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s7.jpg" alt="...">
                      
                        </div>
                    </div>
                                        <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s8.jpg" alt="...">
                      
                        </div>
                    </div>
                                        <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s9.jpg" alt="...">
                      
                        </div>
                    </div>
                                        <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s11.jpg" alt="...">
                      
                        </div>
                    </div>
                                        <div class="item">
                        <div class="slider_overlay">
                            <img src="img/s12.jpg" alt="...">
                      
                        </div>
                    </div>
                </div>
                <!--End of Carousel Inner-->
            </div>
        </div>
        <!--end of slider section-->



        <!--Start of welcome section-->
        <div id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Why Are You Here.</h2>
                            <p>This Web-link is an Initiative of the Center of Computer Education,IPS,UoA to Maintain a link with the Alumni of the Center. </p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-5">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list" >
                                   
                                    <h4> Alumni Network </h4>
                                    <p>The Details of the passed out Students.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-5">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   
                                    <h4>Upcoming Events </h4>
                                    <p>To get Informed about the reunion of Classmates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-5">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   
                                    <h4>Suggestions </h4>
                                    <p>To get the valuable feedback of the Alumni.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-5">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                   
                                    <h4>Priceless Memories </h4>
                                    <p>To maintain a link with your --------  from where ever you are.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
        <!--end of welcome section-->







     
        <!--Start of counter-->
        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header" >
                                <h2>Some Placement Details.</h2>
                    <p>CCE Alumni Are working with proud at MNC's Like-"TCS","CAPEGEMINI",Etc.</p>
                              
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <?php
$query="select * from organisation";
$res=mysqli_query($conn,$query);           
if($res)
{
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
      
           <div class="row" style="float:left;"  id="place">
                        <div class="col-md-5">
                            <div class="counter_item text-center" >
                                <div class="sigle_counter_item">
                        <img class="img-responsive" src="./img/<?php echo $row['image']; ?> " style="height:200px;width:350px;"> 

                                    <div class="counter_text" style="">
                                        <span class="counter"><?php echo $row['co']." "; ?></span>
                                        <p><?php echo $row['fname']." "; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <!--End of row-->
                <!--End of container-->
            </div>
    
    <?php 
    } 
}
      ?>
                </div>
            </div>
        </section>
        <!--end of counter-->
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "alumni");
function make_query($connect)
{
 $query = "SELECT * FROM performer ORDER BY fname ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <center><img src="./img/'.$row["image"].'" alt="'.$row["fname"].'" style="width:300px;height:280px;"/></center>
   <center>
   <h1>'.$row["fname"]." ".$row["lname"].'</h1>
   <h2>'.$row["co"]." , ".$row["desig"].'</h2>
    <h3>'.$row["moment"].'</h3></center>
  
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
  <!--Start of testimonial-->
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>CCE Star's</h2>
                                <p>Some of our best performers in IT Industry , as well as other Domains.</p>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!--End of row-->
                    <div class="container">
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connect); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($connect); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        
        <!--end of testimonial-->

        <!--start of event-->
        <section id="event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="event_header text-center">
                            <h2>Events You Are Witning For</h2>
                            <p>Here you will find Yourself , We have some of your precious moments Listed Down , And Get Ready for Upcoming Events and feel free to Enjoy.</p><hr>
                           
                        </div>
                    </div>
                </div>
                <!--End of row-->
<?php
$query="select * from event";
$res=mysqli_query($conn,$query);
            
if($res)
{
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
                <div class="flex-container">
                <div class="row" style="float:left;">
                    
                        <div class="row"style="float:left;">
                            
                                <div class="event_item"style="width:75%;height:75%;float:left;margin-top:20px;">
                                    <div class="event_img"> 
                                        
                                    <center><img src="img/<?php echo $row['image']; ?>"></center>
                            </div>
                            
                                <div class="event_item" style=" word-wrap: break-word;">
                                   
                                       <center> <a href=""><h2><?php echo $row['subject']; ?> </h2></a><br/>
                                        <h3><?php echo "On ".$row['date']." At ".$row['place']; ?></h3><br/>
                                        <h4 style="margin-left:20px;margin-right:20px;"><?php echo $row['describes']; ?></h4></center>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                                <?php 
    } 
}
   mysqli_close($conn);
?>
</div>
            <!--End of container-->
        </section>
        <!--end of event-->
        
        <!--Start of contact(feedback/Query)-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>Suggestion/Feedback and Query</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
								    <i class="fa fa-map-marker"><span> Centre of Computer Education & Training , (Science Faculty Campus),
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of Allahabad , Allahabad , 211002</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>0532-2460383</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>youremail@mail.com</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="regprocess.php" class="form-horizontal contact-1" role="form" name="contactform" id="contactform" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input name="subject" type="subject" class="form-control" id="subject" placeholder="Subject *">
                                                <select name="comtype" class="form-control" required style="background-color:#D3D3D3">
                                                    <option value="Suggestion">Suggestion</option>
                                                    <option value="Feedback">Feedback</option>
                                                    <option value="Query">Query</option>
                                                </select>
                                                
                                                <div class="text_area">
                                                    <textarea name="moment" id="msg" class="form-control" cols="30" rows="8" placeholder="Message" style="margin-top:20px;"></textarea>
                                                </div>
                                                <button type="submit" class="btn custom-btn" name="feedsubmit">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->



       <?php include("footer.php"); ?>



        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
        
    </body>

</html>
