
<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
?>
<?php 
    $msg = "";
    //if upload button is pressed
    if (isset($_POST['upload'])) {
        //path to store uploaded images
        $target = "images/".basename($_FILES['image']['name']);
        //connect to the database
        $db = mysqli_connect("localhost", "root", "", "authentication");

        //get all the submitted data from  the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
        mysqli_query($db, $sql);//stores teh submitted data into the database table: images
        //now move upload images into the folder: images
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "There was a problem uploading images";
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head><title>Student Sahāya</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
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
                        <li class="active"><a href="question.php">Question Paper</a></li>
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

        <div id="content"><br><br>
        <?php 
                $db = mysqli_connect("localhost", "root", "", "authentication");
                $sql = "SELECT * FROM images";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($result)){
                    echo "<div id='img_div'>";
                        echo "<img src='images/".$row['image']."'>";
                        echo "<p>".$row['text']."</p>";
                    echo "</div>";
                }
         ?>
        

            <form method="post" action="question.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="Say something about this questionpaper"></textarea>
                </div>
                <div>
                    <input type="submit" name="upload" value="Upload image">
                </div>
                
            </form>
        </div>
        
        
    
</body>
</html>

