<!DOCTYPE html>
<html>
<head>
    <title>studentsahya</title>
    <link href="Style.css" rel="stylesheet" type="text/css" />
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        body{
  background-image:url("bg4.jpg") ;
  background-size: cover;
}

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
                        <li><a href="question.php">Question Paper</a></li>
                        <li><a href="study.php">Study</a></li>
                        <li><a href="program.php">Programs</a></li>
                        <li><a href="syllabus.php">Syllabus</a></li>
                        <li class="active"><a href="comment.php">Feedback</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
       <br><br><br><br> <h2 align="center" color="black">Feedback</h2>
       <h2><a href="feedback.php">VIEW FEEDBACK</a></h2>
       
<div id="apDiv1">
<form  name="form1" method="post" action="insert_contact_info.php">
  <table class="tbl_form" width="461" height="278">
    <tr>
      
      </tr>
    <tr>
      
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="nam"  />      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="mob"  />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="email"  />      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td>
        <textarea name="msg"  cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;
      
      
      </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right">
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<link href="Style.css" rel="stylesheet" type="text/css" />

<?php
include('db.php');



$sql="SELECT * FROM feedback ";
 $result=mysql_query($sql);

?>



  <?php 
    while($row=mysql_fetch_array($result))
    {
   
  echo '<div class="nw">';
  echo '<table><tr ><td width="350">Name</td>';
    echo '<td> '.$row['name'].'</td>' ;
  echo '</tr>';

  
   
    echo '<tr><td>Contact Number</td>';
    echo '  <td>'.$row['mob_num'].'</td>' ;
   echo '</tr><tr><td>E-mail</td>';
    echo ' <td> '.$row['e_mail'].'</td>' ;
    echo '</tr><tr><td>Message</td>';
    echo ' <td> '.$row['message'] .'</td>';
    
    echo '</tr>';
    echo '</table>';
    echo '</div>';
  echo '</br>';
  }
    ?>
   
    
  </table>

</div>


<footer class="container-fluid text-center">
            <p> All trademarks are properties of their respective owners. &copy; 2017-2019 - <a href=''>Student Sahāya</a>&trade; Media Pvt Ltd. All rights reserved.</p>
            <p>Designed by Pavan R & Suvodeep Das<strong> MCA 2017, AIMS</strong></a></p>
        </footer>
        <div>
        </div>

</body>
</html>