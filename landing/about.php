<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Sahāya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }
        .navbar-right li {
        color: white;
        }
        
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}
        
        /* Set gray background color and 100% height */
        .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        footer {
        background-color: #555;
        color: white;
        padding: 15px;
        }
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
        .sidenav {
        height: auto;
        padding: 15px;
        }
        .row.content {height:auto;}
        }
        </style>
    </head>
    <body>
        <?php
        if(isset($_SESSION['message']))
        {
        echo "<div id='error_msg'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
        }
        ?>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Student Sahāya</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="about.php">About</a></li>
                        <li><a href="question.php">Question Paper</a></li>
                        <li><a href="study.php">Study</a></li>
                        <li><a href="program.php">Programs</a></li>
                        <li><a href="syllabus.php">Syllabus</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><h4>Hi !! <?php echo $_SESSION['username'];?></h4></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <p><a href="https://www.youtube.com/user/thenewboston">PHP tutorials</a></p>
                    <p><a href="https://www.youtube.com/watch?v=mKt-MDwtVB4&list=PLvAAZChoagM3Ch63apDSE6Ra6NeI62sQV">Bootstrap Tutorials</a></p>
                    <p><a href="https://www.youtube.com/watch?v=KgiCxe-ZW8o&list=PL32BC9C878BA72085">Database(MYSQL) Tutorials</a></p>
                </div>
                <div class="col-sm-10 text-left">
                    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Question Paper</h2>
                    <p class="lead">A huge collection of previous year University Question Paper !</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/questionpaper.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Study Materials</h2>
                    <p class="lead">Huge collection of study materials by professors for reference</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/studymaterials.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Programs & more !</h2>
                    <p class="lead">Collection of popular programs on demand !</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/coding.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
                   
                </div>
                
            </div>
        </div>
        <footer class="container-fluid text-center">
            <p> All trademarks are properties of their respective owners. &copy; 2017-2019 - <a href=''>Student Sahāya</a>&trade; Media Pvt Ltd. All rights reserved.</p>
            <p>Designed by Pavan R & Suvodeep Das<strong> MCA 2017, AIMS</strong></a></p>
        </footer>
        <div>
        </div>
    </div>
</body>
</html>