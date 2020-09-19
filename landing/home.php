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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="question.php">Question Paper</a></li>
                        <li><a href="study.php">Study</a></li>
                        <li><a href="program.php">Programs</a></li>
                        <li><a href="syllabus.php">Syllabus</a></li>
                        <li><a href="comment.php">Feedback</a></li>
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
      <h1>IMPORTANT</h1>
      <p>
        <div class="panel panel-info">
          <div class="panel-heading">Read me</div>
          <div class="panel-body">
            <p>Code readability is a universal subject in the world of computer programming. It's one of the first things we learn as developers.</p>
            <div class="col-md-6">
              <h3>Commenting & Documentation </h3>
              IDE's (Integrated Development Environment) have come a long way in the past few years. This made commenting your code more useful than ever.
            </div>
            <div class="col-md-6">
              <h3>Consistant Indentation </h3>
              I assume you already know that you should indent your code. However, it's also worth noting that it is a good idea to keep your indentation style consistent.
            </div>
            <div class="col-md-6">
              <h3>Consistant Naming Scheme </h3>
              PHP itself is sometimes guilty of not following consistent naming schemes:
              strpos() vs. str_split()
              imagetypes() vs. image_type_to_extension()
              First of all, the names should have word boundaries. There are two popular options:
              camelCase: First letter of each word is capitalized, except the first word.
              underscores: Underscores between words, like: mysql_real_escape_string().
              Having different options creates a situation similar to the indent styles, as I mentioned earlier. If an existing project follows a certain convention, you should go with that. Also, some language platforms tend to use a certain naming scheme. For instance, in Java, most code uses camelCase names, while in PHP, the majority of uses underscores.
            </div>
            <div class="col-md-6">
              <h3>DRY Principle </h3>
              DRY stands for Don't Repeat Yourself. Also known as DIE: Duplication is Evil.
              The principle states:
              "Every piece of knowledge must have a single, unambiguous, authoritative representation within a system."
              The purpose for most applications (or computers in general) is to automate repetitive tasks. This principle should be maintained in all code, even web applications. The same piece of code should not be repeated over and over again.
            </div>
          </div>
        </div
      </p>
      <hr>
      
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