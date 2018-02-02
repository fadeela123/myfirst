<?php
$servername = getenv('IP');
   
 $username = getenv('C9_USER');
    
$password1 = "";
   
 $database = "c9";
    
$dbport = 3306;

    // Create connection
   
 $db = new mysqli($servername, $username, $password1, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
    
    $myQ = $db->query("select uname,password from login");
   
   if($myQ==1){
       echo "login successfull";
       header("location:welcome.php");
   }
   else{
       echo"incorrect details";

   }


?>