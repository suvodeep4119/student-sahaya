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
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Question Paper</a></li>
                        <li><a href="study.php">Study</a></li>
                        <li class="active"><a href="program.php">Programs</a></li>
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
                <div class="col-sm-8 text-left">

                <h1>MCA Programs</h1>
                    <p><a href="mca1.php">MCA 1st semester</a></p>
                    <p><a href="mca2.php">MCA 2nd semester</a></p>
                    <p><a href="mca3.php">MCA 3rd semester</a></p>
                    <p><a href="mca4.php">MCA 4th semester</a></p>
                    <p><a href="mca4.php">MCA 5th semester</a></p>
                    <h1>BCA Programs</h1>
                    <p><a href="bca1.php">BCA 1st semester</a></p>
                    <p><a href="bca2.php">BCA 2nd semester</a></p>
                    <p><a href="bca3.php">BCA 3rd semester</a></p>
                    <p><a href="bca4.php">BCA 4th semester</a></p>
                    <p><a href="bca5.php">BCA 5th semester</a></p>
                    <p><a href="bca6.php">BCA 6th semester</a></p>
                    


                    
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