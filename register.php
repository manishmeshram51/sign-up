<?php
include "connect.php";
if(isset($_POST['submit']))
{
  //echo '<script type="text/javascript">alert("submit clicked")</script>';
  @$name=$_POST['name'];
  @$email=$_POST['email'];
  @$pwd=$_POST['pwd'];
  @$DOB=$_POST['DOB'];
  @$gender=$_POST['gender'];
  @$con=$_POST['country'];
  @$detail=$_POST['detail'];
  
#echo $timestamp;
#$timestamp =now();
#echo timestamp ;

  $query = "insert into details Values('$name','$email','$pwd','$DOB','$gender','$con','$detail',NOW())";
            $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
                echo '<script type="text/javascript">alert("Values inserted successfully")</script>';
                header('Location: http://localhost/assignment/login.html');
            }
            else
            {
              echo '<script type="text/javascript">alert("Values Not inserted")</script>';
            }          
}

$conn->close();
?>
