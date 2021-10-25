<div class="app">
    <!--<head>
        <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="/js/app.js"></script>
    </head>-->

    <?php include('header.php');?>

    <div class="content">
        <div class="apps-card">
            <div class="wrap">
                <center><h3>Performances</h3></center>
                <div class="content-top">


                    <?php
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($con,"select * from  tbl_movie ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    <div class="app-card">
                        <div class="col_1_of_4 span_1_of_4" style="display: flex">
                            <div class="imageRow" style="display: inline-block">
                                <div class="single" style="display: inline-block">
                                    <?php
						
						?>
                                    <a href="about.php?id=<?php echo $m['movie_id'];?>"><img
                                            src="<?php echo $m['image'];?>" alt="" /></a>
                                </div>
                                <div class="movie-text">
                                    <h4 class="h-text"><a
                                            href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $m['movie_name'];?></a>
                                    </h4>
                                    Cast:<Span class="color2"><?php echo $m['cast'];?></span><br>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
  	    	}
  	    	?>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>
</div>