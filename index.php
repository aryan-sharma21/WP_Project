<html>

<!--<head>
    <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="app.js"></script>
</head>-->


<body>
    <div class="video-bg">
        <video width="320" height="240" autoplay loop muted>
            <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="app">
        <?php include('header.php'); ?>
        <div class="wrapper">
            <div class="main-container">
			<div class="main-header">
                <a class="menu-link-main" href="#">All Apps</a>
                <div class="header-menu">
                    <a class="main-header-link is-active" href="#">Upcoming Concerts</a>
                    <a class="main-header-link" href="#">Trending Artists</a>
                    <a class="main-header-link" href="#">Now Playing</a>
                </div>
            </div>
                <div class="content-top">
                    <div class="listview_1_of_3 images_1_of_3">
                        <h3>Upcoming Album Launches</h3>
                        <?php 
					$qry3=mysqli_query($con,"select * from tbl_news");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
                        <div class="content-left">
                            <div class="listimg listimg_1_of_2">
                                <img src="admin/<?php echo $n['attachment'];?>">
                            </div>
                            <div class="text list_1_of_2">
                                <div class="extra-wrap">
                                    <span style="text-color:#000"
                                        class="data"><strong><?php echo $n['name'];?></strong><br>
                                        <span style="text-color:#000" class="data"><strong>Cast
                                                :<?php echo $n['cast'];?></strong><br>
                                            <div class="data">Release Date :<?php echo $n['news_date'];?></div>
                                            <span class="text-top"><?php echo $n['description'];?></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php
				}
				?>
                    </div>
                    <div class="listview_1_of_3 images_1_of_3">
                        <h3>Trending Artists</h3>
                        <div class="middle-list">
                            <?php 
					$qry4=mysqli_query($con,"select * from tbl_movie order by rand()");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
                            <div class="listimg1">
                                <a target="_blank" href="<?php echo $nm['video_url'];?>"><img
                                        src="<?php echo $nm['image'];?>" alt="" /></a>
                                <a target="_blank" href="<?php echo $nm['video_url'];?>"
                                    class="link"><?php echo $nm['movie_name'];?></a>
                            </div>
                            <?php
					}
					?>
                        </div>
                    </div>
                    <?php include('movie_sidebar.php');?>
                </div>
            </div>
        </div>
		<?php include('footer.php');?>
    </div>
</body>