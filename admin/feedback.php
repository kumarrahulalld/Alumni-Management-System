<section id="feedback">
    <div class="container">
        <h1><center style="font-family:sans-serif;">Suggestion/Feedback And Queries</center></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="wel_header">
                        <?php
                            $query="select * from feedback";
                            $res=mysqli_query($conn,$query);      
                            if($res)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    ?>
                                    <center>  
                                        <h2> <?php echo "Sender:-".$row['name']; echo "<br>";?></h2>
                                        <h3> <?php echo "Email:-".$row['email']; echo "<br>";?></h3>
                                        <h2> <?php echo "Subject:-".$row['subject']; echo "<br>";?></h2>
                                        <h2> <?php echo "Type:-".$row['comtype']; echo "<br>";?></h2>
                                        <p><?php echo "Content:-".$row['moment']; echo "<br>";?></p>
                                    </center>
                                    <hr>
                                    <?php 
                                } 
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>