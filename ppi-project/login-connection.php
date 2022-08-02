<?php
 
$conn = "uhg8ihgdfxkjhvd7ghd";
  
try {
    $servername = "localhost:3306";
    $dbname = "myProject";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=myProject",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>