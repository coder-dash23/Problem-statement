<?php

echo "Welcome to the stage where we are ready to get connected to a database<br> ";


   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "heat treatment";

   $conn =  mysqli_connect($servername, $username, $password, $database);

   if (!$conn) {
       echo"Sorry we failed to connect: ". mysqli_connect_error();
   }

  else{
       echo "Connection was successful<br>";
  }

  $sql = "INSERT INTO `temperature scanner` (`TIME`, `CHAN 1`, `CHAN 2`, `CHAN 3`, `CHAN 4`, `CHAN 5`, `CHAN 6`, `CHAN 7`, `CHAN 8`) VALUES ('1:54:06', '+0041', '+1288', '+1289', '+1289', '+1290', '+1290', '+1289', '+1290');";
          

            $result = mysqli_query($conn, $sql);

            if ($result) {
                 echo "Record has been inserted successfully!<br>";
               }
     
               else{
                 echo "Record has not been inserted sucessfully because of this error --->". mysqli_error($conn);
               }


   

?>