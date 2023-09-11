 <?php
 $hostName = "sql107.epizy.com";
 $userName = "epiz_34310028";
 $password = "9UfXwwP4Tsb";
 $databaseName = "epiz_34310028_student_management_system";
 
 $con = mysqli_connect($hostName,$userName,$password,$databaseName);
 
 if(!$con){
	 die("Connection failed! : ".mysqli_connect_error);
	 }
 ?>