<?php
if (isset($_POST["submit"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $address = $_POST["Address"];
    $mobile = $_POST["Mobile"];

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "gym1";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO gym5 (Name, Email, Address, Mobile) VALUES ('$name', '$email', '$address', '$mobile')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
        // Redirect to a thank you page or wherever you want.
        header("Location: main.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>





<!-- <?php 
if (isset($_POST["submit"])) { 
$name = $_POST["Name"]; 
$email = $_POST["Email"]; 
$number = $_POST["Address"]; 
$subject = $_POST["Mobile"]; 

$db_host = "localhost"; 
$db_user = "root"; 
$db_password = ""; 
$db_name = "gym1"; 
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name); 
if (!$conn) 
{ die("Connection failed: " . mysqli_connect_error());
 } 
$sql = "INSERT INTO gym5 (Name, Email, Address,Mobile) VALUES 
('$name', '$email', '$number', '$subject')"; 
 
if (mysqli_query($conn, $sql)) 
{ echo "Message sent successfully!"; 
// Redirect to index.php 
header("Location: main.php");
 exit; 
} else { 
 echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
 
}
mysqli_close($conn); 
 
} 
 
?> -->
