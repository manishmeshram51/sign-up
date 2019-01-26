<?php
include "connect.php";
if(isset($_POST['submit']))
{
  //echo '<script type="text/javascript">alert("submit clicked")</script>';
  @$email=$_POST['email'];
  @$pwd=$_POST['pwd'];
  
  
#echo $timestamp;
#$timestamp =now();
#echo timestamp ;

  $query = "select * from details where email='$email' and password='$pwd'";
            $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
                echo '<script type="text/javascript">alert("Login successfully")</script>';
                header('Location: http://localhost/assignment/welcome.html');
            }
            else
            {
              echo '<script type="text/javascript">alert("Login Failed")</script>';
            }          
}

$conn->close();
?>
